<?php

namespace App\Http\Controllers;

use App\Http\Resources\CruiseResource;
use App\Models\Cruise;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CruiseController extends Controller
{
    /**
     * Get price for a car.
     *
     * @param  Request      $request
     * @return JsonResponse
     */
    public function getCruises(Request $request): mixed
    {
        $request->validate([
            'ship_id' => 'required',
        ]);

        $cruises = Cruise::where('ship_id', $request->ship_id)->get();

        return CruiseResource::collection($cruises);
    }
}
