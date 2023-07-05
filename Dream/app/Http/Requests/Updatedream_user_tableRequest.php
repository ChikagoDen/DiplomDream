<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Updatedream_user_tableRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if($this->user()->is_admin >= 1){
            return true; 
       }
       return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "dream_user_access"=>'bail|required|integer|between:0,3',
        ];
    }
}
