<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOperatorRequest extends FormRequest
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
            'tour_operator' => 'required|max:100',
            'address' => 'required|max:100',
            'email' => 'required|max:255',
            'phone_number' => 'required|numeric|min_digits:9|max_digits:9',
        ];
    }
}
