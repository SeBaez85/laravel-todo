<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
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
            'name'=>['required', 'string', 'max:100'],
            'description'=>['required', 'string', 'max:500'],
            'completed'=>['boolean']
        ];
    }

    public function messages() : array {
        return [
            'name.required'=>'El campo nombre es obligatorio',
            'name.string'=>'El campo nombre debe ser un texto',
            'name.max'=>'El campo nombre no debe ser mayor a :max caracteres',
            'description.required'=>'El campo descripción es obligatorio',
            'description.string'=>'El campo descripción debe ser un texto',
            'description.max'=>'El campo descripción no debe ser mayor a :max caracteres',
            'completed.boolean'=>'El campo completado debe ser verdadero o falso',
        ];
    }
}
