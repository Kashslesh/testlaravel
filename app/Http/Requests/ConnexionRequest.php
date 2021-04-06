<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConnexionRequest extends FormRequest
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

                'login'=>'required|min:5|max:10',
                'password'=>'required|min:5|max:10'
        ];
    }
    public function attributes(){
        return [
            'login'=>'Nom',
            'password'=>'Le mot de passe'
        ];
    }
    public function messages()
    {
        return [
            'login.required'=> 'Remplissez vos nom',
            'password.required'=> 'Remplissez le mot de passe'
        ];
    }
}
