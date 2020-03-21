<?php

namespace App\Http\Controllers;

use App\Package;
use Illuminate\Http\Request;
use App\Room;
use Illuminate\Support\Facades\DB;

class RoomController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $rooms = DB::table('rooms')->select('id','building_id','type_id','floor','number')
//            ->where('available','=',"no")
//            ->orderBy('building_id','asc')
//            ->orderBy('floor','asc')
//            ->orderBy('number','asc')
//            ->get();
        $rooms = (new Room())->allRoom();
        return view('rooms.index',['rooms' => $rooms]);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $room = Room::findOrFail($id);
//        dd($room->id);
        return view('rooms.show',['room' => $room]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showStaff($id)
    {
        $room = Room::findOrFail($id);
        return view('rooms.showStaff',['room' => $room]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function userRoom($id)
    {

        return view('rooms.myRoom');
    }

    public function roomPackages($id){
        $room = Room::findOrFail($id);
        return view('rooms.showPackages',['packages' => $room->packages]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
