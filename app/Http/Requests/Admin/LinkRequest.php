<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class LinkRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {

        $rules = [
            'department_id'                     => ['numeric' , 'required'],
            'program_desc_file'              => 'required|mimes:jpeg,png,jpg,gif,svg,webp,pdf,docx',
            'study_plan_file'                 => 'required|mimes:pdf,docx',
            'course_study_file'              => 'required|mimes:pdf,docx',
            'university_calender_file'              => 'required|mimes:pdf,docx',
            'exam_table_file'              => 'required|mimes:pdf,docx',
            'school_schedule_file'              => 'required|mimes:pdf,docx',
        ];

        if (in_array($this->method(), ['PUT', 'PATCH'])) {
            $rules['program_desc_file'] = 'sometimes|nullable';
            $rules['study_plan_file'] = 'sometimes|nullable';
            $rules['course_study_file'] = 'sometimes|nullable';
            $rules['university_calender_file'] = 'sometimes|nullable';
            $rules['exam_table_file'] = 'sometimes|nullable';
            $rules['school_schedule_file'] = 'sometimes|nullable';
        }//end of if

        return $rules;
    }
}
