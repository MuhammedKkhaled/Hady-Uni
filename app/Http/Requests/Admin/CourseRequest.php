<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
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
            'name_ar'=> ['string' , 'required'],
            'name_en'=> ['string' , 'required'],
            'lecturers_ar'=> ['string' , 'required'],
            'lecturers_en'=> ['string' , 'required'],
            'date'=> ['string' , 'required'],
        ];

        return $rules;
    }
}
