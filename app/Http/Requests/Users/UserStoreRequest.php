<?php

namespace App\Http\Requests\Users;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\Rule;

class UserStoreRequest extends FormRequest
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
            "email"	        => "required|string|unique:users,email|email|max:50",
            "name"		    => "required|string|min:2|max:50",
            "price"                  =>      "required|numeric|min:0|max:100",
        ];
    }


    protected function formatErrors(Validator $validator)
    {
        return $validator->errors()->all();
    }
}
