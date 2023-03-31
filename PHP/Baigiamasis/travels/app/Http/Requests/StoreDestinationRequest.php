<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDestinationRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'destination' => 'required|max:255',
            'description' => 'required|max:1000',
            'capital' => 'required|max:50',
            'population' => 'required|numeric|min_digits:4',
            'currency'=> 'required|max:255'
        ];
    }
}
