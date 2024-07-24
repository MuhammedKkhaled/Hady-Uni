<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ClassificationsRequest extends FormRequest
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
            'webometrics'=> ['string|mimes:pdf,docx'],
            'greenmetrics'=> ['string|mimes:pdf,docx'],
            'scival'=> ['string|mimes:pdf,docx'],
            'scopus'=> ['string|mimes:pdf,docx'],
        ];

        if (in_array($this->method(), ['PUT', 'PATCH'])) {
            $rules['webometrics'] = 'sometimes|nullable';
            $rules['greenmetrics'] = 'sometimes|nullable';
            $rules['scival'] = 'sometimes|nullable';
            $rules['scopus'] = 'sometimes|nullable';
        }//end of if
        return $rules;
    }
}
