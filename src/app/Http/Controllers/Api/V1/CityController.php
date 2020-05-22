<?php

namespace App\Http\Controllers\Api\V1;

use App\City;
use App\Http\Controllers\Controller;

/**
 * @group Cities
 *
 * APIs for
 */
class CityController extends Controller
{
    /**
     * List cities
     *
     * @response 200
     */
    public function index()
    {
        return response(City::all());
    }
}
