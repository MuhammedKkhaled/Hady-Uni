<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreDepartmentRequest extends FormRequest
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
            'name_en'               => 'required',
            'name_ar'               => 'required',
            'specification_name_en' => ['required', 'exists:specifications,name_en'],
            'specification_name_ar' => ['required', 'exists:specifications,name_ar'],
            'department_definition_en' => ['required', 'string'],
            'department_definition_ar' => ['required', 'string'],
            'department_message_en' => ['required', 'string'],
            'department_message_ar' => ['required', 'string'],
            'department_vision_en' => ['required', 'string'],
            'department_vision_ar' => ['required', 'string'],
            'department_goals_en' => ['required', 'string'],
            'department_goals_ar' => ['required', 'string'],
            'department_head_word_en' => ['nullable'],
            'department_head_word_ar' => ['required', 'string'],
            'minimum_percent'    => ['nullable'],
            'maximum_percent'    => ['required'],
            'price'              => ['required', 'numeric'],
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
