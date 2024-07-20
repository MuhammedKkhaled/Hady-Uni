<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class Review extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'department_id',
        'qualification',
        'trac',
        'trac_tow',
        'rate',
        'year',
        'work',
        'work_state',
        'work_link',
        'message',
        'state',
    ];

    public function sustainable():BelongsTo
    {
        return $this->belongsTo(Department::class , 'department_id');
    }
}
