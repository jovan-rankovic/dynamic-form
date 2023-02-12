<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormsRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'fields' => 'required|array',
            'fields.*' => 'required|array',
            'fields.*.value' => 'required|string',
            'fields.*.type' => 'required|numeric|between:1,3'
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
