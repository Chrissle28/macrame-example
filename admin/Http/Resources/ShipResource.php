<?php

namespace Admin\Http\Resources;

use App\Models\Booking;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin Booking
 */
class ShipResource extends JsonResource
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
        return [
            'id'      => $this->id,
            'name'    => $this->name,
            'active'  => $this->active,
            'cruises' => CruiseResource::collection($this->cruises),
        ];
    }
}
