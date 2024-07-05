<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class Affiliate extends Model
{
    use HasFactory;

    protected $fillable = [
        'department_id',
        'name_en',
        'name_ar',
        'certificate_en',
        'certificate_ar',
        'general_specialization_en',
        'general_specialization_ar',
        'special_specialization_en',
        'special_specialization_ar',
        'title_en',
        'title_ar',
        'notes_en',
        'notes_ar',
        "facebook",
        "twitter",
        "linkedin",
        "image",
        "cv",
    ];

    protected $appends = ['image','cv'];
/* 
    public function getImageAttribute()
    {
        return Storage::url('uploads/affiliates/' . $this->file);

    }
    public function getCVAttribute()
    {
        return Storage::url('uploads/affiliates/' . $this->file);

    }// end of getPosterPathAttribute */
    public function department():BelongsTo
    {
        return $this->belongsTo(Department::class , 'department_id');
    }
}
