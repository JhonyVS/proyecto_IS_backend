<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductoRequest extends FormRequest
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
      'producto_nombre' => 'required|min:3|max:50',
      'producto_precio' => 'required|min:1|max:8',
      'producto_descripcion' => 'required|min:5|max:255',
      'producto_categoria' => 'required',
      'promocion_descuento' => 'required',
      'promocion_fecha_inicio' => 'required',
      'promocion_fecha_fin' => 'required',
      'promocion_hora_inicio' => 'required',
      'promocion_hora_fin' => 'required',
      'negocio_id' => 'required',
      'photo' => 'required|image|mimes:jpeg,png,jpg|max:1024'
    ];
  }

  public function messages()
  {
    return [
      'required' => 'El campo :attribute es obligatorio',
      'unique' => 'El nombre :input ya fue tomado',
    ];
  }
}
