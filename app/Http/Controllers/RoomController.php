<?php

namespace App\Http\Controllers;

use App\Room;
use Ramsey\Uuid\Uuid;
use App\Http\Requests\RoomRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(RoomRequest $request): RedirectResponse
    {
        // Generate new room UUID
        $roomUuid = Uuid::uuid1()->toString();

        // Add the new room
        Room::create([
            'uuid' => $roomUuid,
            'name' => $request->name,
            'card_id'=> $request->card_set,
        ]);

        // Redirect to the created room
        return redirect()->route('room', ['roomId' => $roomUuid]);
    }

    /**
     * Show the room.
     *
     * @param string $roomId
     */
    public function room(string $roomId)
    {
        $room = Room::whereUuid($roomId)->first();

        $routes = collect([
            'join' => route('join'),
        ]);

        return view('room', ['name' => $room->name, 'id' => $roomId, 'routes' => $routes]);
    }
}
