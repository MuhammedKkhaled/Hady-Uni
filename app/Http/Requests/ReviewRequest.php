<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReviewRequest extends FormRequest
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
        return [
            'email'=>['required' , 'email'],
            'name'=>['required','string'],
            'phone'=>['required','string'],
            'department_id' => ['numeric' , 'required'],
            'qualification'=>['required','string'],
            'trac'=>['required','string'],
            'trac_tow'=>['required','string'],
            'rate'=>['required','string'],
            'year'=>['required','string'],
            'work'=>['required','string'],
            'work_state'=>['required','string'],
            'work_link'=>['required','string'],
            'message'=>['required','string'],
            'state'=>['numeric'],
        ];
    }
}
