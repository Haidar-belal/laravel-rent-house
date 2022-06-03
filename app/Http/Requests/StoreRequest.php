<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'region' => 'required',
            'address' => 'required',
            'city' => 'required',
            'phone' => 'required|numeric|min:10',
            'type' => 'required',
            'price' => 'required|numeric',
            'space' => 'required|numeric',
            'room_number' => 'required|numeric',
            'floors_number' => 'required|numeric',
            'img' => 'required|image',
        ];
    }
}
