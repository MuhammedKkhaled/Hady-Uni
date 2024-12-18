<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReviewTowRequest extends FormRequest
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
            'name' => ['required', 'string'],
            'enterprise' => ['required', 'string'],
            'type' => ['string', 'required'],
            'number_employees' => ['required', 'numeric'],
            'employees_name' => ['required', 'string'],
            "q1" => ['required', 'string'],
            "q2" => ['required', 'string'],
            "q3" => ['required', 'string'],
            "q4" => ['required', 'string'],
            "q5" => ['required', 'string'],
            "q6" => ['required', 'string'],
            "q7" => ['required', 'string'],
            "q8" => ['required', 'string'],
            "q9" => ['required', 'string'],
            "q10" => ['required', 'string'],
            "q11" => ['required', 'string'],
            "q12" => ['required', 'string'],
            "q13" => ['required', 'string'],
            "q14" => ['required', 'string'],
            "q15" => ['required', 'string'],
            "q16" => ['required', 'string'],
            "q17" => ['required', 'string'],
            "q18" => ['required', 'string'],
            "q19" => ['required', 'string'],
            "q20" => ['required', 'string'],
            "q21" => ['required', 'string'],
            'message' => [ 'string'],
            'state' => ['numeric'],
        ];
    }
}
