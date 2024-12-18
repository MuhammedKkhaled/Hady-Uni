<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Storage;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_en',
        'name_ar',
        'phone',
        'email',
        'facebook',
        'linkedin',
        'twitter',
        'specialization_en',
        'specialization_ar',
        'brief_en',
        'brief_ar',
        'type',
        'image',
    ];

    protected $appends = ['image_path'];


    public function getImagePathAttribute()
    {
        return Storage::url('uploads/teachers/' . $this->image);

    }// end of getPosterPathAttribute

    public function scopeWhenSearch($query, $search)
    {
        return $query->when($search, function ($q) use ($search) {

            return $q->where('name', 'like', '%' . $search . '%');

        });

    }// end of scopeWhenSearch

    public function properties():HasMany
    {
        return  $this->hasMany(Property::class);
    }

}
