<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Report;

class ReportController extends Controller
{
    
    public function getReportStats()
    {

    $user = Auth::user();
    $constituency = $user->constituency ?? null;

    $query = Report::query();

    if ($constituency) {
        $query->whereHas('user', function ($q) use ($constituency) {
    $q->where('constituency', $constituency);
});

    }

    $totalReports = $query->count();

    $categoryData = $query
        ->select('category', DB::raw('count(*) as count'))
        ->groupBy('category')
        ->get()
        ->map(function ($item) use ($totalReports) {
            return [
                'category' => $item->category,
                'percentage' => $totalReports > 0 ? round(($item->count / $totalReports) * 100, 1) : 0,
            ];
        });

   return response()->json(
    $categoryData->pluck('percentage', 'category')
);

}






    
}
