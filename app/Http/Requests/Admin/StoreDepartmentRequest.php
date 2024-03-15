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
            'name'               => 'required',
            'specification_name' => ['required' , 'exists:specifications,name'],
            'minimum_percent'    => ['nullable'],
            'maximum_percent'    => ['required'],
            'price'              => ['required', 'numeric'],
            'image'              => 'required|mimes:jpeg,png,jpg,gif,svg,webp,pdf,docx',
        ];

        if (in_array($this->method(), ['PUT', 'PATCH'])) {
            $rules['image'] = 'sometimes|nullable';
        }//end of if

        return $rules;
    }
}
