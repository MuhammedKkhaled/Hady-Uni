<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AllStudentRequest extends FormRequest
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
            'department_id'=> ['numeric' , 'required'],
            'year'=> ['date' , 'required'],
            'ranking'=> ['numeric' , 'required'],
            'name_en'       => 'string',
            'name_ar'       => 'required|string',
            'type_en'       => 'string',
            'type_ar'       => 'required|string',
        ];
        return $rules;
    }
}
