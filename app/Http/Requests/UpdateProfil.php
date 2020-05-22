<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfil extends FormRequest
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
            "username" => "string|min:3|alpha",
            "email" => "string|min:5|unique",
            "namalengkap" => "string|min:5",
            "ttl" => "string|min:3|alpha",
        ];
    }
}
