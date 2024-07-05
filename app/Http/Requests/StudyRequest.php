<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudyRequest extends FormRequest
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
            'email'=>['required' , 'email'],
            'name'=>['required','string'],
            'phone'=>['required','string'],
            'zip_code'=>['required','string'],
            'city'=>['required','string'],
            'living'=>['required','string'],
            'nationality'=>['required','string'],
            'marital'=>['required','string'],
            'qualification'=>['required','string'],
            'enterprise'=>['required','string'],
            'languages'=>['required','string'],
            'in_iraq'=>'string',
            'department_id'                     => ['numeric' , 'required'],
            'personal'              => 'required|mimes:jpeg,png,jpg',
            'passport'              => 'required|mimes:jpeg,png,jpg',
            'certificate'              => 'required|mimes:jpeg,png,jpg,pdf,docx',
            'cv'              => 'required|mimes:jpeg,png,jpg,pdf,docx',
            'certificate_1'              => 'required|mimes:jpeg,png,jpg,pdf,docx',
            'message'=>['string'],
            'state'=>['numeric'],
            'note'=>['string','nullable'],
        ];
        if (in_array($this->method(), ['PUT', 'PATCH'])) {
            $rules['personal'] = 'sometimes|nullable';
            $rules['passport'] = 'sometimes|nullable';
            $rules['certificate'] = 'sometimes|nullable';
            $rules['cv'] = 'sometimes|nullable';
            $rules['certificate_1'] = 'sometimes|nullable';
        }//end of if

        return $rules;
    }
}
