<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AllStudent extends Model
{

    use HasFactory;

    protected $fillable = [
        'name_en',
        'name_ar',
        'type_en',
        'type_ar',
        'ranking',
        'year',
        'department_id',
    ];

    public function department():BelongsTo
    {
        return $this->belongsTo(Department::class , 'department_id');
    }

}
