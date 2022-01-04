<?php

namespace Admin\Http\Controllers;

use Admin\Http\Indexes\ShipIndex;
use Admin\Http\Resources\ShipResource;
use Admin\Ui\Page;
use App\Models\Ship;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ShipController
{
    /**
     * Ship index page.
     *
     * @param  Page $page
     * @return Page
     */
    public function items(Request $request, ShipIndex $index)
    {
        return $index->items(
            $request,
            Ship::query()
        );
    }

    /**
     * Show the home page for the admin application.
     *
     * @param  Page $page
     * @return Page
     */
    public function index(Page $page)
    {
        return $page->page('Ships/Index');
    }

    /**
     * Show the home page for the admin application.
     *
     * @param  Page $page
     * @return Page
     */
    public function show(Ship $ship, Page $page)
    {
        return $page->page('Ships/Show')->with('ship', new ShipResource($ship->load('cruises')));
    }

    /**
     * Store a new ship.
     *
     * @param  Request                 $request
     * @param  SendBookingReceivedMail $send_booking_received_mail
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required',
        ]);

        Ship::create($validated);

        return Redirect::route('admin.ships.index');
    }

    /**
     * Update a ship.
     *
     * @param  Request          $request
     * @param  Ship             $ship
     * @return RedirectResponse
     */
    public function update(Request $request, Ship $ship)
    {
        $validated = $request->validate([
            'name' => 'required',
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
