<?php

namespace App\Http\Requests\Cms;

use Illuminate\Foundation\Http\FormRequest;

class HalamanFormRequest extends FormRequest
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
        $id = $this->route('beritum');

        $method = $this->getMethod();
        $rules = [];

        switch($method){
            case 'POST':
                $rules += [
                    'judul'     => ['required', 'unique:halaman,judul', 'string'],
                    'thumbnail' => ['image', 'max:512'],
                    'halaman'   => ['required', 'string']
                ];
                break;
            case 'PUT':
            case 'PATCH':
                break;
        }

        return $rules;
    }

    public function attributes(){
        return [
            'judul'     => 'Judul Halaman',
            'thumbnail' => 'Thumbnail Halaman',
            'halaman'   => 'Halaman'
        ];
    }
}


