<?php

namespace App\Http\Controllers;

use App\Models\MeetingRoom;
use Illuminate\Http\Request;
use App\Models\Reservation;

class MeetingRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 会議室一覧
        $meetingRooms = MeetingRoom::all();
        return view('meeting_rooms.index', ['meetingRooms' => $meetingRooms]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MeetingRoom  $meetingRoom
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //会議室詳細
        $meetingRoom = MeetingRoom::find($id);
        $currentReservation = Reservation::where('room_id', $id)
        ->where('start', '<=', now())
        ->where('end', '>=', now())
        ->get();

        return view('meeting_rooms.show', [
        'meetingRoom' => $meetingRoom,
        'currentReservation' => $currentReservation
    ]);
        return view('meeting_rooms.show', ['meetingRoom' => $meetingRoom]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MeetingRoom  $meetingRoom
     * @return \Illuminate\Http\Response
     */
    public function edit(MeetingRoom $meetingRoom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MeetingRoom  $meetingRoom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MeetingRoom $meetingRoom)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MeetingRoom  $meetingRoom
     * @return \Illuminate\Http\Response
     */
    public function destroy(MeetingRoom $meetingRoom)
    {
        //
    }
}
