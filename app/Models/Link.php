<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class Link extends Model
{
    use HasFactory;

    protected $fillable = [
        'program_desc_file',
        'study_plan_file',
        'course_study_file',
        'university_calender_file',
        'exam_table_file',
        'school_schedule_file',
        'department_id',
    ];

    protected $appends = [
        'program_desc_file_path',
        'study_plan_file_path',
        'course_study_file_path',
        'university_calender_file_path',
        'exam_table_file_path',
        'school_schedule_file_path',
    ];



    public function getProgramDescFilePathAttribute()
    {
        return Storage::url('uploads/links/' . $this->program_desc_file);

    }// end of getPosterPathAttribute

    public function getStudyPlanFilePathAttribute()
    {
        return Storage::url('uploads/links/' . $this->study_plan_file);

    }// end of getPosterPathAttribute

  public function getCourseStudyFilePathAttribute()
    {
        return Storage::url('uploads/links/' . $this->course_study_file);

    }// end of getPosterPathAttribute

    public function getUniversityCalenderFilePathAttribute()
    {
        return Storage::url('uploads/links/' . $this->university_calender_file);

    }// end of getPosterPathAttribute
    public function getExamTableFilePathAttribute()
    {
        return Storage::url('uploads/links/' . $this->exam_table_file);

    }// end of getPosterPathAttribute

    public function getSchoolScheduleFilePathAttribute()
    {
        return Storage::url('uploads/links/' . $this->school_schedule_file);

    }// end of getPosterPathAttribute


    public function scopeWhenSearch($query, $search)
    {
        return $query->when($search, function ($q) use ($search) {

            return $q->where('department_id', 'like', '%' . $search . '%');

        });

    }// end of scopeWhenSearch

    public function department():BelongsTo
    {
        return  $this->belongsTo(Department::class , 'department_id');
    }
}
