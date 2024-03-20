<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AffiliateRequest extends FormRequest
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

            'department_id' => ['required'],
            'name_en'=>['required', 'string'  , 'max:500'],
            'name_ar'=>['required', 'string'  , 'max:500'],
            'certificate_en'=>['required', 'string'  , 'max:900'],
            'certificate_ar'=>['required', 'string'  , 'max:900'],
            'general_specialization_en'=>['required', 'string'  , 'max:900'],
            'general_specialization_ar'=>['required', 'string'  , 'max:900'],
            'special_specialization_en'=>['required', 'string'  , 'max:900'],
            'special_specialization_ar'=>['required', 'string'  , 'max:900'],
            'title_en'=>['required', 'string'  , 'max:900'],
            'title_ar'=>['required', 'string'  , 'max:900'],
            'notes_en'=>['required', 'string'  , 'max:900'],
            'notes_ar'=>['required', 'string'  , 'max:900'],
        ];
    }
}
