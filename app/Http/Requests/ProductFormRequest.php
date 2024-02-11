<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class ProductFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>[
                'required',
                'min:4',
                'string',
                'max:100'
            ],
            'description'=>[
                'required',
                'string',
                'max:1000'
            ],
            'image'=>['required',
                        'mimes:jpeg,jpg,png,gif',
                        'max:10000'
            ],
            'price'=>['required',
                        'numeric'
            ],
            
        ];
    }
    public function messages()
    {
        return[
            'name.required'=>'please enter name',
            'description.required'=>'please enter description',
            'image.required'=>'please select image',
            'price.required'=>'please enter price',
            'price.numeric'=>'please enter valid price',
            'image.mimes'=>'please enter valid image',
        ];
    }
}
