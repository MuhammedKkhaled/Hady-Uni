<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'teacher_id',
        'property_title_en',
        'property_title_ar',
        'property_desc_en',
        'property_desc_ar',
        'type_en',
        'type_ar',
    ];

    public function teacher():BelongsTo
    {

        return  $this->belongsTo(Teacher::class , 'teacher_id');

    }

}
