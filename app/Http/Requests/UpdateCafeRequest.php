<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCafeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nama' => 'required|string',
            'alamat' => 'required|string',
            'no_telepon' => 'required|string',
            'email' => 'required|string',
            'tanggal_reservasi'=> 'required|string',
            'waktu_mulai' => 'required|string',
            'waktu_selesai' => 'required|string',
            'jumlah_tamu'=> 'required|numeric',
            'no_meja'=> 'required|numeric'
        ];
    }
}
