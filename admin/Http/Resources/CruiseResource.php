<?php

namespace Admin\Http\Resources;

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
        return [
            'id'           => $this->id,
            'departure_at' => new DateResource($this->departure_at),
            'return_at'    => new DateResource($this->return_at),
        ];
    }
}
