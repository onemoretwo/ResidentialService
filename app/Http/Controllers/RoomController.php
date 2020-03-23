<?php

namespace App\Http\Controllers;

use App\Package;
use Carbon\Carbon;
use App\Type;
use App\WifiCode;
use Illuminate\Http\Request;
use App\Room;
use Illuminate\Support\Facades\Auth;
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
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $types = Type::all();
        $type = Type::find($id);
        if ($type) {
            $rooms = Room::get()->where('type_id', $type->id);
            return view('rooms.index',['types' => $types, 'rooms' => $rooms, 'selected_type' => $type]);
        } else {
            $rooms = Room::all();
            return view('rooms.index',['types' => $types, 'rooms' => $rooms]);
        }

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
        $room = Room::findOrFail($id);
        $n_packages = Package::where('room_id',$id)->where('status','รอรับของ')->count();
        $wifi_code = WifiCode::where('user_id',Auth::id())->first();

        //update wifi
        if ($wifi_code != null) {
            $expiredate = Carbon::create($wifi_code->expire_at);
            $today = Carbon::today();
            if ($today->gte($expiredate)) {
                $wifi_code->delete();
            }
        }
        $wifi_code = WifiCode::where('user_id',Auth::id())->first();
        //
        return view('rooms.myRoom',['room' => $room, 'c' => $n_packages,'wifi_code' => $wifi_code]);
    }

    public function roomPackages($id){
        $packages = Package::where('room_id',$id)->where('status','รอรับของ')->get();
        return view('rooms.showPackages',['packages' => $packages]);
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
