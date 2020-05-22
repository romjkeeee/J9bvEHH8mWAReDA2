<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ListStationRequest extends FormRequest
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
            'city_id' => 'integer',
            'opened'  => 'boolean',
            'longitude' => 'required_with:latitude|regex:/^-?\d{1,2}\.\d{6,}$/',
            'latitude' => 'required_with:longitude|regex:/^-?\d{1,2}\.\d{6,}$/'
        ];
    }
}
