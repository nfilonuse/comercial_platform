<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateStore extends FormRequest
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
            'name'             => 'required|string',
            'legal_data'       => 'required|string',

            'address.address'  => 'required|string',
            'address.lat'      => 'required|numeric',
            'address.lng'      => 'required|numeric',
            'address.place_id' => 'nullable|string',
        ];
    }
}
