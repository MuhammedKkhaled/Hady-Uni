<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class News extends Model
{
    use HasFactory;
    protected $fillable = [
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
        return Storage::url('uploads/news/' . $this->image);

    }// end of getPosterPathAttribute


    public function scopeWhenSearch($query, $search)
    {
        return $query->when($search, function ($q) use ($search) {

            return $q->where('title', 'like', '%' . $search . '%');

        });

    }// end of scopeWhenSearch

}
