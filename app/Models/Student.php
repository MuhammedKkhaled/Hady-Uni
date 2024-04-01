<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'year',
        'student_file',
        'graduated_file',
        'department_id',
    ];

    protected $casts = [
        'year'=>'date',
    ];

    protected $appends = ['student_file_path' , 'graduated_file_path'];

    public function getStudentFilePathAttribute()
    {
        return Storage::url('uploads/students/' . $this->student_file);

    }// end of getPosterPathAttribute
   public function getGraduatedFilePathAttribute()
    {
        return Storage::url('uploads/students/' . $this->graduated_file);

    }// end of getPosterPathAttribute


    public function scopeWhenSearch($query, $search)
    {
        return $query->when($search, function ($q) use ($search) {

            return $q->where('year', 'like', '%' . $search . '%');

        });

    }// end of scopeWhenSearch


    public function department():BelongsTo
    {
        return $this->belongsTo(Department::class ,'department_id');
    }
}
