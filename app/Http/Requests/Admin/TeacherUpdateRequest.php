<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class TeacherUpdateRequest extends FormRequest
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
            'name_en'       => ['nullable'],
            'name_ar'       => ['required'],
            'phone' => ['required' , 'string'],
            'email' => ['required' , 'email' , 'exists:teachers,email'],
            'facebook' => ['nullable' , 'string'],
            'linkedin' => ['nullable' , 'string'],
            'twitter' => ['nullable', 'string'],
            'specialization_en' => ['nullable', 'min:3'],
            'specialization_ar' => ['required', 'min:3'],
            'brief_en' => ['nullable','max:999'],
            'brief_ar' => ['required','max:999'],
            'type'=>['required' , 'numeric' , 'max:14'],
            'image'      => 'required|mimes:jpeg,png,jpg,gif,svg,webp',
        ];

        if (in_array($this->method(), ['PUT', 'PATCH'])) {
            $rules['image'] = 'sometimes|nullable';
        }//end of if

        return $rules;
    }
}
