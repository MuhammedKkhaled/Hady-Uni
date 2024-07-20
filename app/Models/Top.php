<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Top extends Model
{

    use HasFactory;

    protected $fillable = [
        'image',
        'name_en',
        'name_ar',
        'average',
        'ranking',
        'year',
        'department_id',
    ];

    protected $appends = [
        'image_path',
    ];

    public function getImagePathAttribute()
    {
        // Logic to get the path for image_1
    }

    public function department():BelongsTo
    {
        return $this->belongsTo(Department::class , 'department_id');
    }

}
