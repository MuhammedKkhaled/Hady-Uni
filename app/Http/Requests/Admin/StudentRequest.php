<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
            'year'=> ['date' , 'required'],
            'department_id'=> ['numeric' , 'required'],
            'student_file'              => 'nullable|mimes:jpeg,png,jpg,gif,svg,webp,pdf,docx',
            'graduated_file'              => 'required|mimes:xlsx,xlsm,xlsb,xltx,bin',
        ];

        if (in_array($this->method(), ['PUT', 'PATCH'])) {
            $rules['student_file'] = 'sometimes|nullable';
            $rules['graduated_file'] = 'sometimes|nullable';
        }//end of if

        return $rules;
    }
}
