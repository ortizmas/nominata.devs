<?php

namespace App\Http\Requests\Associations;

use Illuminate\Foundation\Http\FormRequest;

class StoreAssociationRequest extends FormRequest
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
            'initials' => 'required|unique:associations,initials',
            'slug' => 'required|unique:associations,slug',
            'name' => 'required',
            'union_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'initials.required' => 'O campo sigla é obrigatorio',
            'initials.unique' => 'A siglas já existe',
            'slug.required' => 'O slug é obrigatorio',
            'slug.unique' => 'Esta associação já existe',
            'name.required' => 'O nome é obrigatorio',
            'union_id.required' => 'Selecione uma união',

        ];
    }
}
