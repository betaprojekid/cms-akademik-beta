<?php

namespace App\Http\Requests\Cms;

use Illuminate\Foundation\Http\FormRequest;

class KategoriFormRequest extends FormRequest
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
            'kategori' => 'required|unique:kategori_beritas,kategori|string|min:3'
        ];
    }

    public function messages()
    {
        return [
            'kategori' => 'Kategori'
        ];
    }
}
