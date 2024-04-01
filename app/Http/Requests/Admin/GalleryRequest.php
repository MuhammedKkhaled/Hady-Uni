<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class GalleryRequest extends FormRequest
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
            'department_id'                     => ['numeric' , 'required'],
            'image_1'              => 'required|mimes:jpeg,png,jpg,gif,svg,webp,pdf,docx',
            'image_2'              => 'required|mimes:jpeg,png,jpg,gif,svg,webp,pdf,docx',
            'image_3'              => 'required|mimes:jpeg,png,jpg,gif,svg,webp,pdf,docx',
            'image_4'              => 'required|mimes:jpeg,png,jpg,gif,svg,webp,pdf,docx',
            'image_5'              => 'required|mimes:jpeg,png,jpg,gif,svg,webp,pdf,docx',
            'image_6'              => 'required|mimes:jpeg,png,jpg,gif,svg,webp,pdf,docx',
            'image_7'              => 'required|mimes:jpeg,png,jpg,gif,svg,webp,pdf,docx',
            'image_8'              => 'required|mimes:jpeg,png,jpg,gif,svg,webp,pdf,docx',
        ];

        if (in_array($this->method(), ['PUT', 'PATCH'])) {
            $rules['image_1'] = 'sometimes|nullable';
            $rules['image_2'] = 'sometimes|nullable';
            $rules['image_3'] = 'sometimes|nullable';
            $rules['image_4'] = 'sometimes|nullable';
            $rules['image_5'] = 'sometimes|nullable';
            $rules['image_6'] = 'sometimes|nullable';
            $rules['image_7'] = 'sometimes|nullable';
            $rules['image_8'] = 'sometimes|nullable';
        }//end of if

        return $rules;
    }
}
