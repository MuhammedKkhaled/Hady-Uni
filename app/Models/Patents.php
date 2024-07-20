<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class patents extends Model
{
    use HasFactory;
    protected $fillable = [
        'title_ar',
        'title_en',
        'author',
        'content_en',
        'content_ar',
        'Instructor_en',
        'Instructor_ar',
        'Donor_en',
        'Donor_ar',
        'department_id',
        'year'
    ];


    public function scopeWhenSearch($query, $search)
    {
        return $query->when($search, function ($q) use ($search) {

            return $q->where('title', 'like', '%' . $search . '%');

        });

    }// end of scopeWhenSearch

    public function department():BelongsTo
    {
        return $this->belongsTo(Department::class , 'department_id');
    }
}
