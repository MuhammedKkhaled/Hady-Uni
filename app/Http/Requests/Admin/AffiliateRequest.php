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
        $rules = [

            'department_id' => ['required'],
            'name_en'=>[ 'string'  , 'max:500'],
            'name_ar'=>['required', 'string'  , 'max:500'],
            'certificate_en'=>[ 'string'  , 'max:900'],
            'certificate_ar'=>['required', 'string'  , 'max:900'],
            'general_specialization_en'=>[ 'string'  , 'max:900'],
            'general_specialization_ar'=>['required', 'string'  , 'max:900'],
            'special_specialization_en'=>[ 'string'  , 'max:900'],
            'special_specialization_ar'=>['required', 'string'  , 'max:900'],
            'title_en'=>[ 'string'  , 'max:900'],
            'title_ar'=>['required', 'string'  , 'max:900'],
            'notes_en'=>['string'  , 'max:900'],
            'notes_ar'=>['required', 'string'  , 'max:900'],
            'facebook'=>[ 'string'  , 'nullable'],
            'twitter'=>[ 'string'  , 'nullable'],
            'linkedin'=>[ 'string'  , 'nullable'],
            'image'=> ['string|mimes:jpeg,png,jpg'],
            'cv'=> ['string|mimes:jpeg,png,jpg,gif,pdf,docx'],
        ];
        
        if (in_array($this->method(), ['PUT', 'PATCH'])) {
            $rules['image'] = 'sometimes|nullable';
            $rules['cv'] = 'sometimes|nullable';
        }//end of if

        return $rules;
    }
}
