<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MutasiBarangRequest extends FormRequest
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
          'dari' => 'required',
          'nama_barang' => 'required|max:50',
          'kode_barang' => 'required',
          'jenis_barang' => 'required',
          'featured_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ];
    }
}
