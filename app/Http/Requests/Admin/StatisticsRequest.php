<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StatisticsRequest extends FormRequest
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
            'graduated'=> ['numeric' , 'required'],
            'students'=> ['numeric' , 'required'],
            'students_abroad'=> ['numeric' , 'required'],
            'success_percent'=> ['numeric' , 'required'],
        ];

        return $rules;
    }
}
