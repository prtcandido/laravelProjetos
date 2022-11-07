<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComputadorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'marca' => 'required|max:5',
            'ram' => 'required|integer',
            'disco' => 'required|integer',
        ];
    }
}
