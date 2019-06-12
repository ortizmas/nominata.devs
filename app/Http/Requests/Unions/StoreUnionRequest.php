<?php

namespace App\Http\Requests\Unions;

use Illuminate\Foundation\Http\FormRequest;

class StoreUnionRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'initials' => 'required|unique:unions,initials',
            'slug' => 'required|unique:unions,slug',
            'name' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'initials.required' => 'O campo sigla é obrigatorio',
            'initials.unique' => 'A siglas já existe',
            'slug.required' => 'O titulo é obrigatorio',
            'slug.unique' => 'Esta união já existe',
            'name.required' => 'O nome é obrigatorio',
        ];
    }
}
