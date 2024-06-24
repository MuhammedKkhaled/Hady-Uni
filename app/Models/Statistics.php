<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statistics extends Model
{

    use HasFactory;

    protected $fillable = [
        'graduated',
        'students',
        'success_percent',
    ];


    public function getImage1PathAttribute()
    {
        // Logic to get the path for image_1
    }
}
