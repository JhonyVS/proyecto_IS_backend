<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
     * @return array<string, mixed>
     */
  public function rules()
  {
    return [
      'nick' => 'required|min:4|max:32',
      'password' => 'required|min:8|max:32',
    ];
  }

  // function messages()
  // {
  //   return [
  //     'nick' => 'El email tiene que ser una direccion de correo electronico valido',
  //   ];
  // }
}
