<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatedreambookRequest extends FormRequest
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
            'DreamBookWord' => 'bail|required|string',
            'DreamBookDescription' => 'bail|required|string',
            'idDream' => 'bail|required|integer',
        ];
    }
}
