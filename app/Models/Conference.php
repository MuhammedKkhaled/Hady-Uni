<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Conference extends Model
{
    use HasFactory;
    protected $fillable =[
        'title',
        'location',
        'date',
        'start_time',
        'end_time',
        'image',
    ];

    protected $appends = ['image_path'];


    protected $casts = [
        'date' => 'date', // Cast the 'date' field to a date type
    ];
    public function getImagePathAttribute()
    {
        return Storage::url('uploads/conferences/' . $this->image);

    }// end of getPosterPathAttribute

    public function getStartTimeAttribute($value)
    {
        return Carbon::parse($value);
    }

    public function getEndTimeAttribute($value)
    {
        return Carbon::parse($value);
    }

    public function setStartTimeAttribute($value)
    {
        $this->attributes['start_time'] = Carbon::parse($value)->format('H:i:s');
    }

    public function setEndTimeAttribute($value)
    {
        $this->attributes['end_time'] = Carbon::parse($value)->format('H:i:s');
    }

    public function scopeWhenSearch($query, $search)
    {
        return $query->when($search, function ($q) use ($search) {

            return $q->where('title', 'like', '%' . $search . '%');

        });

    }// end of scopeWhenSearch


}
