<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NegocioRequest extends FormRequest
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
      'nombre_negocio' => 'required|min:3|max:64|string',
      'nombre_propietario' => 'required|min:4|max:64|string',
      'logo' => 'required|image|mimes:jpeg,png,jpg|max:1024',
      'ubicacion' => 'required|min:10|max:255|string',
      'descrip' => 'required|min:5|max:256|string',
      'telefono' => 'required|min:5|max:20|string',
      'hora_apertura' => 'required|string',
      'hora_cierre' => 'required|string',
      'nick' => 'required|min:4|max:32|unique:usuario|string',
      'contrasena' => 'required|min:4|max:32|string'
    ];
  }

  public function messages()
  {
    return [
      'required' => 'El campo :attribute es obligatorio',
      'unique' => 'El nombre :input ya fue tomado'
    ];
  }
}
