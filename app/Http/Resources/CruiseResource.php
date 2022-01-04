<?php

namespace App\Http\Resources;

use App\Models\Booking;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin Booking
 */
class CruiseResource extends JsonResource
{
    /**
     * The resource instance.
     *
     * @var Booking
     */
    public $resource;

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request                                        $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $departure_at = new DateResource($this->departure_at);
        $return_at = new DateResource($this->return_at);

        return [
            'id'           => $this->id,
            'ship_id'      => $this->ship_id,
            'period'       => $this->getReadablePeriod($departure_at, $return_at),
            'departure_at' => $departure_at,
            'return_at'    => $return_at,
        ];
    }
}
