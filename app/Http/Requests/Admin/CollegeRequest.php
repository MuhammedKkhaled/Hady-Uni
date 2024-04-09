<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CollegeRequest extends FormRequest
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
            'book_number'       => 'string',
            'book_name_en'       => 'string',
            'book_name_ar'       => 'required|string',
            'specialization_name_en' => [ 'string'],
            'specialization_name_ar' => ['required' , 'string'],
            'auther_name_en'=> [ 'string'],
            'auther_name_ar'=> [ 'string'],
        ];

        return $rules;
    }
}
