<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class TopRequest extends FormRequest
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
            'department_id'=> ['numeric' , 'required'],
            'year'=> ['date' , 'required'],
            'ranking'=> ['numeric' , 'required'],
            'average'=> ['numeric' , 'required'],
            'name_en'       => 'string',
            'name_ar'       => 'required|string',
            'image' => ['required','image','mimes:jpeg,png,jpg,gif,svg','max:1000'],
        ];

        if (in_array($this->method(), ['PUT', 'PATCH'])) {
            $rules['image'] = 'sometimes|nullable';
        }//end of if

        return $rules;
    }
}
