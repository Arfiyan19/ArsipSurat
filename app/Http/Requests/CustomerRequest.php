<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
        return [
            'nik' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'username' => 'required',
            'password' => 'required',
            'no_hp' => 'required',
            'jenis_kelamin' => 'required',
        ];
    }
}
