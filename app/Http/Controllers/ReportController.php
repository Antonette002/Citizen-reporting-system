<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Report;

class ReportController extends Controller
{

    public function index()
{
    
    $reports = Report::orderBy('created_at', 'desc')->get();

    return view('report.index', compact('reports'));
}

    
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

//data store method
public function store(Request $request)
{
    $validated = $request->validate([
        'description' => 'required|string|max:1000',
        'category' =>'required','garbage', 'blocked_drainage', 'potholes', 'floods', 'illegal_settlement', 'unauthorized_construction', 'other',
        'image_path' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        'latitude' => 'required|numeric|between:-90,90',
        'longitude' => 'required|numeric|between:-180,180',
        'status' => 'in:pending', 
    ]);

    // Handle image upload if present
    if ($request->hasFile('image_path')) {
        $imagePath = $request->file('image_path')->store('report_images', 'public');
        $validated['image_path'] = $imagePath;
    }

    $validated['user_id'] = auth()->id();

    Report::create($validated);

    return redirect()->back()->with('success', 'Issue reported successfully!');
}







    
}
