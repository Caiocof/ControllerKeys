<?php

namespace App\Http\Controllers;

use App\Models\RoomKeys;
use App\Models\RentKeys;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ControllerRoom extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!Auth::check() === true) {
            return redirect()->route('login');
        }

        $rooms = RoomKeys::all();

        return view('room.index')->with('rooms', $rooms);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!Auth::check() === true) {
            return redirect()->route('login');
        }

        $requireds = [
            'requester' => 'required'
        ];

        $message = [
            'requester.required' => 'O nome do solicitante é um campo obrigatorio!'
        ];

        $request->validate($requireds, $message);

        $rentKeys = new RentKeys();
        $rentKeys->receiveKey = $request->room_id;
        $rentKeys->requester = $request->requester;
        $rentKeys->user_id = Auth::user()->id;
        $rentKeys->save();

        $room = RoomKeys::find($request->room_id);
        $room->status = true;


        $room->save();


        return redirect()->route('index.room');

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (!Auth::check() === true) {
            return redirect()->route('login');
        }

        $room = RoomKeys::where('id', $id)->get();

        if (!empty($room)) {

            $room = $room[0];

            return view('room.deliver')->with('room', $room);

        } else {
            return redirect()->route('index.room');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($room_id)
    {
        if (!Auth::check() === true) {
            return redirect()->route('login');
        }

        $rentRoom = RentKeys::where('receiveKey', $room_id)->where('requester', '!=', 'null')->get();

        if (!empty($rentRoom)) {

            $rentRoom = $rentRoom[0];

            return view('room.receive')->with('rentRoom', $rentRoom);

        } else {
            return redirect()->route('index.room');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $room_id)
    {
        if (!Auth::check() === true) {
            return redirect()->route('login');
        }

        $rent = RentKeys::find($request->id);
        $rent->devolution = $request->requester;
        $rent->requester = null;
        $rent->save();

        $room = RoomKeys::find($room_id);
        $room->status = false;
        $room->save();

        return redirect()->route('index.room');
    }

    public function busy()
    {
        if (!Auth::check() === true) {
            return redirect()->route('login');
        }

        $listKeys = RoomKeys::where('requester', '!=', null)
            ->join('rent_keys', 'room_keys.id', 'rent_keys.receiveKey')
            ->orderBy('requester')
            ->get();


        return view('room.listBusy')->with('listKeys', $listKeys);


    }

}
