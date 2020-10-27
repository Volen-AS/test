<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //
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
            'first_name' =>'required|string|min:2|max:255',
            'last_name' => 'required|string|min:2|max:255',
            'phone' => 'required|string|min:9|max:15',
            'birth_date' => 'string|min:8|max:10',
            'sex' => 'numeric'
        ];
    }
}
