<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateStationRequest;
use App\Http\Requests\ListStationRequest;
use App\Http\Requests\UpdateStationRequest;
use App\Station;
use Illuminate\Support\Facades\DB;

/**
 * @group Station
 *
 * APIs for
 */
class StationController extends Controller
{
    /**
     * List stations
     * @queryParam city_id The ID of the city. Example: 1
     * @queryParam opened Get just opened Station. Example: 1
     * @queryParam longitude Example: 30.000000
     * @queryParam latitude Example: 50.000000
     *
     * @response 200
     */
    public function index(ListStationRequest $request)
    {
        return response(Station::query()->when($request->city_id, function ($q, $city_id) {
            return $q->where('city_id', $city_id);
        })->when($request->opened, function ($q) {
            return $q->where('work_from', '<=', now())->where('work_to', '>=', now());
        })->when($request->latitude, function ($q) use ($request) {
            return $q->select(DB::raw('*, ( 6367 * acos( cos( radians('.$request->latitude.') ) * cos( radians( latitude ) ) * cos( radians( longitude ) - radians('.$request->longitude.') ) + sin( radians('.$request->latitude.') ) * sin( radians( latitude ) ) ) ) AS distance'))
                ->having('distance', '<', 10)
                ->orderBy('distance');
        })->with('city')->paginate(10));
    }

    /**
     * Store station
     *
     * @bodyParam name string required Example: Best station
     * @bodyParam city_id integer required Example: 1
     * @bodyParam address string required Example: st.Pushkina Zolotushkina
     * @bodyParam longitude string required Example: 30.510360
     * @bodyParam latitude string required Example: 50.471052
     * @bodyParam phone string required Example: 380445005050
     * @bodyParam cost string required Example: 3$ per/mW
     * @bodyParam description required string Example: best ever station in Kiev
     * @bodyParam ports string required Example: psr
     * @bodyParam work_from string required Example: 08:00:00
     * @bodyParam work_to string required Example: 22:00:00
     *
     * @response 200
     */
    public function store(CreateStationRequest $request)
    {
        return response(Station::query()->create($request->validated()), 201);
    }

    /**
     * Update station
     *
     * @bodyParam name string Example: Best station
     * @bodyParam city_id integer Example: 1
     * @bodyParam address string Example: st.Pushkina Zolotushkina
     * @bodyParam longitude string Example: 30.510360
     * @bodyParam latitude string Example: 50.471052
     * @bodyParam phone string Example: 380445005050
     * @bodyParam cost string Example: 3$ per/mW
     * @bodyParam description string Example: best ever station in Kiev
     * @bodyParam ports string Example: psr
     * @bodyParam work_from string Example: 08:00:00
     * @bodyParam work_to string Example: 22:00:00
     *
     * @response 200
     */
    public function update(UpdateStationRequest $request ,Station $station)
    {
        return response($station->update($request->validated()));
    }


    /**
     * Show station
     * @response 200
     */
    public function show(Station $station)
    {
        return response($station);
    }

    /**
     * Destroy station
     *
     * @response 200
     */
    public function destroy(Station $station)
    {
        if($station->delete()) return response(null, 204);
    }
}
