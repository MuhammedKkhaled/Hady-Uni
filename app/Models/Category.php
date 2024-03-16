<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Storage;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    protected $appends = ['image_path'];

    public function getImagePathAttribute(): string
    {
     return Storage::url('uploads/categories/' . $this->image);
    }

    public function scopeWhenSearch($query, $search)
    {
        return $query->when($search, function ($q) use ($search) {

            return $q->where('name', 'like', '%' . $search . '%');

        });

    }// End function

    public function libraries():HasMany
    {
        return $this->hasMany(Library::class);
    }

}
