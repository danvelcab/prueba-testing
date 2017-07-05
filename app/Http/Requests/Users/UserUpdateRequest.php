<?php

namespace App\Http\Requests\Users;

use App\Providers\CodesServiceProvider;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\Rule;

class UserUpdateRequest extends FormRequest
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
        $user_id = $this->route('user_id');

        return [
            "email"	        => "required|string|unique:users,email,". $user_id ."|email|max:50",
            "name"		    => "required|string|max:50",
        ];
    }


    protected function formatErrors(Validator $validator)
    {
        return $validator->errors()->all();
    }
}
