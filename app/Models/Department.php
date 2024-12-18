<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Facades\Storage;

class Department extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_en',
        'name_ar',
        'specification_name_en',
        'specification_name_ar',
        'department_definition_en',
        'department_definition_ar',
        'department_message_en',
        'department_message_ar',
        'department_vision_en',
        'department_vision_ar',
        'department_goals_en',
        'department_goals_ar',
        'department_head_word_en',
        'department_head_word_ar',
        'installments_en',
        'installments_ar',
        'graduation_en',
        'graduation_ar',
        'admission_en',
        'admission_ar',
        'scholarships_en',
        'scholarships_ar',
        'employe_link',
        'graduate_link',
        'minimum_percent',
        'maximum_percent',
        'price',
        'image',
        'file',
    ];

    protected $appends = ['image_path', 'file_path'];

    public function getImagePathAttribute()
    {
        return Storage::url('uploads/departments/' . $this->image);
    } // end of getPosterPathAttribute

    public function getFilePathAttribute()
    {
        return Storage::url('uploads/departments/' . $this->file);
    } // end of getPosterPathAttribute


    public function scopeWhenSearch($query, $search)
    {
        return $query->when($search, function ($q) use ($search) {

            return $q->where('name', 'like', '%' . $search . '%');
        });
    } // end of scopeWhenSearch

    public function affiliates(): HasMany
    {
        return  $this->hasMany(Affiliate::class);
    }

    public function students(): HasMany
    {
        return $this->hasMany(Student::class);
    }

    public function link(): HasOne
    {
        return $this->hasOne(Link::class);
    }

    public function gallery(): HasOne
    {
        return $this->hasOne(Gallery::class);
    }

    public function accreditations():HasMany
    {
        return $this->hasMany(Accreditation::class);
    }

    public function ads():HasMany
    {
        return $this->hasMany(Ads::class);
    }
}
