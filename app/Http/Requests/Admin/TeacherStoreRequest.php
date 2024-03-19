<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class TeacherStoreRequest extends FormRequest
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
            'name_en'       => 'required',
            'name_ar'       => 'required',
            'phone' => ['required' , 'string'],
            'email' => ['required' , 'email' , 'unique:teachers'],
            'facebook' => ['nullable'],
            'linkedin' => ['nullable'],
            'twitter' => ['nullable'],
            'specialization_en' => ['required', 'min:3'],
            'specialization_ar' => ['required', 'min:3'],
            'brief_en' => ['required','max:999'],
            'brief_ar' => ['required','max:999'],
            'type' =>['required' , 'numeric' , 'max:14'] ,
            'image'      => 'required|mimes:jpeg,png,jpg,gif,svg,webp',
        ];

        if (in_array($this->method(), ['PUT', 'PATCH'])) {
            $rules['image'] = 'sometimes|nullable';
        }//end of if

        return $rules;
    }
}
