<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255',
           'description' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>"Name Must be Filled Up.",
            //'description.required'=>"Description Field Must be Filled Up."
        ];
    }

    public function attributes(): array
    {
        return [
            'description' => 'Category Description',
        ];
    }
}
