<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ConferenceRequest extends FormRequest
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
            'title_en'       => 'string',
            'title_ar'       => 'required',
            'location_en' => [ 'string'],
            'location_ar' => ['required' , 'string'],
            'date' => ['required' , 'date' , 'after_or_equal:today'],
            'start_time' => ['required'],
            'end_time' => ['required' , 'after:start_time'],
            'image'      => 'required|mimes:jpeg,png,jpg,gif,svg,webp',
        ];

        if (in_array($this->method(), ['PUT', 'PATCH'])) {
            $rules['image'] = 'sometimes|nullable';
        }//end of if

        return $rules;
    }
}
