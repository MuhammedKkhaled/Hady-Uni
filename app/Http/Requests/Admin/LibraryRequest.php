<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class LibraryRequest extends FormRequest
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
            'name_en'       => 'string',
            'name_ar'       => 'required|string',
            'category_id' => ['required' , 'min:1', 'exists:categories,id'],
            'specialization_name_en' => [ 'string'],
            'specialization_name_ar' => ['required' , 'string'],
            'published_at' => ['required' , 'date'],
            'file'      => 'required|mimes:jpeg,png,jpg,gif,pdf,docx',
        ];

        if (in_array($this->method(), ['PUT', 'PATCH'])) {
            $rules['file'] = 'sometimes|nullable';
        }//end of if

        return $rules;
    }
}
