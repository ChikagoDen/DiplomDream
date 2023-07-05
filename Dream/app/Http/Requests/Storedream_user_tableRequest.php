<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Storedream_user_tableRequest extends FormRequest
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
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "titleDream"=>'bail|nullable|string|max:120',
            "descriptionDream"=>'bail|required|string|max:2000',
        ];
    }

}
