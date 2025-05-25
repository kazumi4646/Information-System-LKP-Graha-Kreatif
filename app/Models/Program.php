<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'category',
        'price',
        'duration_weeks',
        'image_path',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_programs')
                   ->withPivot('enrolled_at')
                   ->withTimestamps();
    }
}
