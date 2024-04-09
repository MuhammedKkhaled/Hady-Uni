<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class College extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'book_number',
        'book_name_en',
        'book_name_ar',
        'specialization_name_en' ,
        'specialization_name_ar',
        'auther_name_en',
        'auther_name_ar',
    ];
}
