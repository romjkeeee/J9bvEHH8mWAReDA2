<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateStationRequest extends FormRequest
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
            'name'        => 'required|string',
            'city_id'     => 'required|numeric|exists:cities,id',
            'address'     => 'required|string',
            'longitude'   => 'required|regex:/^-?\d{1,2}\.\d{6,}$/',
            'latitude'    => 'required|regex:/^-?\d{1,2}\.\d{6,}$/',
            'phone'       => 'required|numeric',
            'cost'        => 'required|string',
            'description' => 'required|string',
            'ports'       => 'required|string',
            'work_from'   => 'required|string',
            'work_to'     => 'required|string',
        ];
    }
}
