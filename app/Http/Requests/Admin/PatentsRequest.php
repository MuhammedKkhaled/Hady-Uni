<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PatentsRequest extends FormRequest
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
            'title_ar'       => 'required',
            'title_en'       => 'nullable',
            'content_ar' => 'required',
            'content_en' => 'nullable',
            'Instructor_ar' => 'required',
            'Instructor_en' => 'nullable',
            'Donor_ar' => 'required',
            'Donor_en' => 'nullable',
            'year' => 'required',
        ];

        if (in_array($this->method(), ['PUT', 'PATCH'])) {
            $rules['image'] = 'sometimes|nullable';
        }//end of if

        return $rules;
    }
}
