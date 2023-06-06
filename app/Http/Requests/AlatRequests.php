<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class alatRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    // public function authorize()
    // {
    //     return false;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id_alat'      => 'required',
            'id_staf'      => 'required',
            'nama_alat'    => 'required',
            'jenis_alat'   => 'required',
            'harga'        => 'required',
            'jumlah'       => 'required',
        ];
    }
}