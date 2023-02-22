<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\JsonResponse;

class StutendRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules()
    {
        return [


            'card' => 'required',
            'names' => 'required',
            'last_name' => 'required',
            'birthdate' => 'required',
            'father_name' => 'required',
            'mother_name' => 'required',
            'grade' => 'required',
            'section' => 'required',
            'date_admission' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'card.required' => 'El campo card es requerido',
            'names.required' => 'El campo names  es requerido',
            'last_name.required' => 'El campo last_name  es requerido',
            'birthdate.required' => 'El campo birthdate  es requerido',
            'father_name.required' => 'El campo father_name  es requerido',
            'mother_name.required' => 'El campo mother_name  es requerido',
            'grade.required' => 'El campo grade  es requerido',
            'section.required' => 'El campo section  es requerido',
            'date_admission.required' => 'El campo date_admission  es requerido',

        ];
    }

    protected function failedValidation(\Illuminate\Contracts\Validation\Validator $validator)
    {
        $response = new JsonResponse([
            "status" => false,
            "message" => $validator->errors()
            ], 422);
        throw new \Illuminate\Validation\ValidationException($validator, $response);
    }
}
