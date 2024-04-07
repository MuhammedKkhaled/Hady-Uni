<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class SustainableRequest extends FormRequest
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
            'titel_en'               => 'required',
            'titel_ar'               => 'required',
            'department_definition_en' => ['required', 'string'],
            'department_definition_ar' => ['required', 'string'],
            'category_id'              => ['required', 'numeric'],
            'image'              => 'required|mimes:jpeg,png,jpg,gif,svg,webp',
            'file'              => 'required|mimes:pdf,docx',
        ];

        if (in_array($this->method(), ['PUT', 'PATCH'])) {
            $rules['image'] = 'sometimes|nullable';
            $rules['file'] = 'sometimes|nullable';
        } //end of if

        return $rules;
    }
}
