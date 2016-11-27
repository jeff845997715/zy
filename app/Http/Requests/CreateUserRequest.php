<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateUserRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $id = $this->route('user'); //获取当前需要排除的id
        
        return [
            'name' => 'required|min:3',//email邮箱，min:3最少三个字符
            'phone' => 'required|max:15|unique:users' . $id,
            'email' => 'required|max:50|unique:users' . $id,
            'password' => 'required|confirmed|min:6',
        ];
    }
}
