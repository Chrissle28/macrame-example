<?php

namespace Admin\Http\Controllers;

use App\Models\Cruise;
use App\Models\Ship;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CruiseController
{
    /**
     * Store a new cruise.
     *
     * @param  Request          $request
     * @param  Ship             $ship
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'ship_id'      => 'required',
            'departure_at' => 'required',
            'return_at'    => 'required',
        ]);

        Cruise::create($validated);

        return Redirect::route('admin.ships.show', ['ship' => $request->ship_id]);
    }

    /**
     * Update a cruise.
     *
     * @param  Request          $request
     * @param  Ship             $ship
     * @return RedirectResponse
     */
    public function update(Request $request, Ship $ship)
    {
        $validated = $request->validate([
            'departure_at' => 'required',
            'return_at'    => 'required',
        ]);

        $ship->update($validated);

        return Redirect::route('admin.ships.show', ['ship' => $ship]);
    }

    /**
     * Delete a ship.
     *
     * @param  Request          $request
     * @param  Ship             $ship
     * @return RedirectResponse
     */
    public function delete(Request $request, Ship $ship): RedirectResponse
    {
        $ship->delete();

        return Redirect::route('admin.ships.index');
    }

    /**
     * Toggle active state of a ship.
     *
     * @param  Request                 $request
     * @param  SendBookingReceivedMail $send_booking_received_mail
     * @return RedirectResponse
     */
    public function toggleActive(Request $request, Ship $ship): RedirectResponse
    {
        $ship->active = ! $ship->active;
        $ship->save();

        return Redirect::route('admin.ships.show', $ship);
    }
}
