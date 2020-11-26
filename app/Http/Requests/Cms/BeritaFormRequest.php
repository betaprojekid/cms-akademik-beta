<?php

namespace App\Http\Requests\Cms;

use Illuminate\Foundation\Http\FormRequest;

class BeritaFormRequest extends FormRequest
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
                    'judul'         => ['required', 'min:3', 'string'],
                    'kategori'      => ['required', 'exists:kategori_beritas,id', 'integer'],
                    'berita'        => ['required', 'string', 'min:5'],
                    'gambar_berita' => ['image', 'max:512', 'nullable']
                ];
                break;
            case 'PUT':
            case 'PATCH':
                $rules +=[];
            break;
        }

        return $rules;
    }

    public function attributes(){
        return [
            'judul'    => 'Judul',
            'kategori' => 'Kategori Berita',
            'berita'   => 'Berita'
        ];
    }
}
