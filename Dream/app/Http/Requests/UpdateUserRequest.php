<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'name'=>'bail|required|max:240|string',
            'is_admin'=>'bail|required|integer|between:0,2',
            'status'=>'bail|required|integer|between:0,2',
            'email'=>'required|string|email',
        ];
    }
}
