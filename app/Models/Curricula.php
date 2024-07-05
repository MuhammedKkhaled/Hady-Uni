<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Curricula extends Model
{

    use HasFactory;

    protected $fillable = [
        'image_1',
        'name_en',
        'name_ar',
        'degree',
        'department_id',
        'teacher_id',
        "affiliate_id",
    ];

    protected $appends = [
        'image_1_path',
    ];

    public function getImage1PathAttribute()
    {
        // Logic to get the path for image_1
    }

    public function department():BelongsTo
    {
        return $this->belongsTo(Department::class , 'department_id');
    }
    public function teacher():BelongsTo
    {
        return $this->belongsTo(Teacher::class , 'teacher_id');
    }
    public function affiliate():BelongsTo
    {
        return $this->belongsTo(Affiliate::class , 'affiliate_id');
    }
}
