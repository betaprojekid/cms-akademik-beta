<?php

namespace App\Http\Requests\Cms;

use Illuminate\Foundation\Http\FormRequest;

class BeritaFormReques extends FormRequest
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
        if(null !== $this->getMethod('_method', null)){
            $method = $this->get('_method');
        }
        $this->offsetUnset('_method');

        $rules = [];

        switch($method){
            case 'POST':
            break;
            case 'PUT':
            case 'PATCH':
            break;
        }
    }

    public function attributes(){
        
    }
}
