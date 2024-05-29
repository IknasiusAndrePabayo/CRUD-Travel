<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePesananRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // Sesuaikan dengan kebijakan otorisasi Anda
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'customer_name' => 'required|string|max:255',
            'travel_package_id' => 'required|exists:travel_packages,id',
            'total_price' => 'required|numeric|min:0',
            'status' => 'required|string|in:pending,processing,completed', // Sesuaikan dengan status yang diizinkan
            // tambahkan aturan validasi lain sesuai kebutuhan
        ];
    }
}
