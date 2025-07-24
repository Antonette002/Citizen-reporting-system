<?php

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Report extends Model
{
    protected $fillable = [
        'user_id',
        'description',
        'latitude',
        'longitude',
        'category',
        'image_path',
        'status',
        'priority',
    ];
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

