<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class CalculatorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }


    public function messages(): array
    {
        return [
            'number2.required' => 'Le Nombre 2 est obligé',
            'number1.required' => 'Le Nombre 1 est obligé',
            'number2.numeric' => 'Le Nombre 2 de dois etre numerique',
            'number1.numeric' => 'Le Nombre 1 de dois etre numerique',
            'umber1.required_if' => 'Impossible de diviser par 0. Assurez-vous que les deux nombres ne sont pas égaux à 0 pour la division.',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'number1' => 'required|numeric',
            'operation' => 'required|in:add,subtract,multiply,divide',
            'number2' => 'required|numeric',
        ];
    }
}