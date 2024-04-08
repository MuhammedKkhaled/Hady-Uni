<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Facades\Storage;

class Sustainable extends Model
{
    use HasFactory;

    protected $fillable = [
        'titel_en',
        'titel_ar',
        'department_definition_en',
        'department_definition_ar',
        'category_id',
        'image',
        'file',
    ];

    protected $appends = ['image_path', 'file_path'];

    public function getImagePathAttribute()
    {
        return Storage::url('uploads/sustainable/' . $this->image);
    } // end of getPosterPathAttribute

    public function getFilePathAttribute()
    {
        return Storage::url('uploads/sustainable/' . $this->file);
    } // end of getPosterPathAttribute


    public function scopeWhenSearch($query, $search)
    {
        return $query->when($search, function ($q) use ($search) {

            return $q->where('name', 'like', '%' . $search . '%');
        });
    } // end of scopeWhenSearch
}
