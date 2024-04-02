<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class Ads extends Model
{
    use HasFactory;
    protected $fillable = [
        'department_id',
        'title_ar',
        'title_en',
        'author',
        'content_en',
        'content_ar',
        'image',
    ];

    protected $appends = ['image_path'];

    public function getImagePathAttribute()
    {
        return Storage::url('uploads/ads/' . $this->image);

    }// end of getPosterPathAttribute


    public function scopeWhenSearch($query, $search)
    {
        return $query->when($search, function ($q) use ($search) {

            return $q->where('title', 'like', '%' . $search . '%');

        });

    }// end of scopeWhenSearch

    public function department():BelongsTo
    {
        return  $this->belongsTo(Department::class , 'department_id');
    }
}
