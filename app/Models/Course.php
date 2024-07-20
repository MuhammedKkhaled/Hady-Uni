<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

    use HasFactory;

    protected $fillable = [
        'name_ar',
        'name_en',
        'lecturers_ar',
        'lecturers_en',
        'date',
    ];
}
