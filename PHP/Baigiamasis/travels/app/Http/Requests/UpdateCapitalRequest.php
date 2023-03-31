<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCapitalRequest extends FormRequest
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
            'capital' => 'required|max:50',
            'population' => 'required|numeric|min_digits:4',
            'must_visit' => 'required|max:255',
            'time_zone' => 'required|max:100',
        ];
    }
}
