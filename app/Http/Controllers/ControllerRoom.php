<?php

namespace App\Http\Controllers;

use App\Models\RoomKeys;
use App\Models\RentKeys;
use Illuminate\Http\Request;

class ControllerRoom extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = RoomKeys::all();

        return view('room.index')->with('rooms', $rooms);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->roomKey($request);

        return redirect()->action([ControllerRoom::class, 'index']);

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $room = RoomKeys::where('id', $id)->get();

        if (!empty($room)) {

            $room = $room[0];

            return view('room.deliver')->with('room', $room);

        } else {
            return redirect()->action([ControllerRoom::class, 'index']);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rentRoom = RentKeys::where('id', $id)->get();

        if (!empty($rentRoom)) {
            $rentRoom = $rentRoom[0];

            return view('room.receive')->with('rentRoom', $rentRoom);

        } else {
            return redirect()->action([ControllerRoom::class, 'index']);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    private function roomKey($req)
    {
        $rentKeys = [
            'room_id' => $req->room_id,
            'requester' => $req->requester,
        ];

        RentKeys::create($rentKeys);

        $room = RoomKeys::find($req->room_id);
        $room->status = ($room->status ? false : true);
        $room->save();

    }
}
