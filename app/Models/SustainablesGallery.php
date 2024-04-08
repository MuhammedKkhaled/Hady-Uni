<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SustainablesGallery extends Model
{

    use HasFactory;

    protected $fillable = [
        'image_1',
        'department_id',
    ];

    protected $appends = [
        'image_1_path',
    ];

    public function getImage1PathAttribute()
    {
        // Logic to get the path for image_1
    }

    public function sustainable():BelongsTo
    {
        return $this->belongsTo(Sustainable::class , 'department_id');
    }
}
