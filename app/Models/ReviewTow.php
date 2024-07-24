<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class ReviewTow extends Model
{
    use HasFactory;
    protected $fillable = [
        'name' ,
        'enterprise' ,
        'type',
        'number_employees',
        'employees_name',
        "q1" ,
        "q2" ,
        "q3" ,
        "q4" ,
        "q5" ,
        "q6" ,
        "q7" ,
        "q8" ,
        "q9" ,
        "q10" ,
        "q11" ,
        "q12" ,
        "q13" ,
        "q14" ,
        "q15" ,
        "q16" ,
        "q17" ,
        "q18" ,
        "q19" ,
        "q20" ,
        "q21" ,
        'message' ,
        'state',
    ];
}
