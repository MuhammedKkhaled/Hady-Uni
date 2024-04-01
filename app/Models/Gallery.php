<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Gallery extends Model
{

    use HasFactory;

    protected $fillable = [
        'image_1',
        'image_2',
        'image_3',
        'image_4',
        'image_5',
        'image_6',
        'image_7',
        'image_8',
        'department_id',
    ];

    protected $appends = [
        'image_1_path',
        'image_2_path',
        'image_3_path',
        'image_4_path',
        'image_5_path',
        'image_6_path',
        'image_7_path',
        'image_8_path',
    ];

    public function getImage1PathAttribute()
    {
        // Logic to get the path for image_1
    }
 public function getImage2PathAttribute()
    {
        // Logic to get the path for image_1
    }
 public function getImage3PathAttribute()
    {
        // Logic to get the path for image_1
    }
 public function getImage4PathAttribute()
    {
        // Logic to get the path for image_1
    }
 public function getImage5PathAttribute()
    {
        // Logic to get the path for image_1
    }
 public function getImage6PathAttribute()
    {
        // Logic to get the path for image_1
    }
    public function getImage7PathAttribute()
    {
        // Logic to get the path for image_1
    }

    public function getImage8PathAttribute()
    {
        // Logic to get the path for image_1
    }

    public function department():BelongsTo
    {
        return $this->belongsTo(Department::class , 'department_id');
    }
}
