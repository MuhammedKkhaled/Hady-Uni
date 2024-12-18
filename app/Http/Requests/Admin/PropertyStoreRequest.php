<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PropertyStoreRequest extends FormRequest
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
            'teacher_id'=>['required','exists:teachers,id'],
            'property_title_en'=>['required','string'],
            'property_title_ar'=>['required','string'],
            'property_desc_en'=>['required','max:500'],
            'property_desc_ar'=>['required','max:500'],
            'type_en'=>['required'],
            'type_ar'=>['required'],
        ];
    }
}
