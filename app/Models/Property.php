<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'teacher_id',
        'property_title',
        'property_desc',
        'type',
    ];

    public function teacher():BelongsTo
    {

        return  $this->belongsTo(Teacher::class , 'teacher_id');

    }

}
