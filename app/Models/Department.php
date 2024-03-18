<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Department extends Model
{
    use HasFactory;

    protected $fillable =[
      'name',
      'specification_name',
      'department_definition',
      'department_message',
      'department_vision',
      'department_goals',
      'minimum_percent',
      'maximum_percent',
      'price',
      'image',
      'file',
    ];

    protected $appends = ['image_path' , 'file_path'];

    public function getImagePathAttribute()
    {
        return Storage::url('uploads/departments/' . $this->image);

    }// end of getPosterPathAttribute

    public function getFilePathAttribute()
    {
        return Storage::url('uploads/departments/' . $this->file);

    }// end of getPosterPathAttribute


    public function scopeWhenSearch($query, $search)
    {
        return $query->when($search, function ($q) use ($search) {

            return $q->where('name', 'like', '%' . $search . '%');

        });

    }// end of scopeWhenSearch


}

