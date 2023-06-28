<?php

namespace App\Http\Requests;

use App\Models\biblioteca_tabl as ModelsBiblioteca_tabl;
use Illuminate\Auth\Access\Gate;
use Illuminate\Foundation\Http\FormRequest;

class biblioteca_tabl extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        
    //    return $this->biblioteca_tabl()->can('create');
        // return $this->user()->can('create');//можно ли ему смотреть ресурс
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
            'biblioteca_tabl_author'=>'bail|required|max:120|string',
        ];
    }

    // protected $redirectRoute = 'addDreamBook';
}
