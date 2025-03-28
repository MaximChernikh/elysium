<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AccountRequest extends FormRequest
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
            //
            'name' => 'max:255',
            'email' => 'required|min:1|max:255',
            'country_id' => 'max:3',
            'gender' => 'max:255',
            'occupation' => 'max:255',
            'year_of_birth' => 'max:255'
        ];
    }
}
