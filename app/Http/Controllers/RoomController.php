<?php

namespace App\Http\Controllers;

use App\BookingRequest;
use App\Building;
use App\Package;
use Carbon\Carbon;
use App\Type;
use App\WifiCode;
use Illuminate\Http\Request;
use App\Room;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;
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
     * @return Response
     */
    public function index($id)
    {
        $types = Type::all();
        $type = Type::find($id);
        $buildings = Building::all();
        $rooms = Room::get()->where('type_id', $type->id);
        return view('rooms.index', [
                'types' => $types,
                'rooms' => $rooms,
                'buildings' => $buildings,
                'selected_type' => $type,
        ]);

    }

    /**
     * Display a listing of the resource.
     *
     * @param $id
     * @param int $building_id
     * @return Response
     */
    public function indexBuilding($id, $building_id)
    {
        $types = Type::all();
        $type = Type::find($id);
        $buildings = Building::all();
        $rooms = Room::get()->where('type_id', $type->id)->where('building_id', $building_id);
        $building = Building::findOrFail($building_id);
        return view('rooms.index', [
            'types' => $types,
            'rooms' => $rooms,
            'buildings' => $buildings,
            'building' => $building,
            'selected_type' => $type,
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @param $id
     * @param $building_id
     * @param $floor
     * @return Response
     */
    public function indexBuildingFloor($id, $building_id, $floor)
    {
        $types = Type::all();
        $type = Type::find($id);
        $buildings = Building::all();
        $rooms = Room::get()->where('type_id', $type->id)->where('building_id', $building_id)->where('floor', $floor);
        $building = Building::find($building_id);
        return view('rooms.index', [
            'types' => $types,
            'rooms' => $rooms,
            'buildings' => $buildings,
            'building' => $building,
            'selected_type' => $type,
            'selected_floor' => $floor
        ]);
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $room = Room::findOrFail($id);

        $room_images = DB::table('room_images')->select('*')->where('room_id',$room->id)->get();
//        dd($room_images);
        return view('rooms.show',['room' => $room, 'room_images' => $room_images]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
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
     * @return Response
     */
    public function userRoom($id)
    {
        $room = Room::findOrFail($id);

        $request = BookingRequest::get()->where('room_id', $id)->where('deleted_at', null)->first();

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
        return view('rooms.myRoom',['room' => $room, 'c' => $n_packages,'wifi_code' => $wifi_code, 'request' => $request]);
    }

    public function roomPackages($id){
        $packages = Package::where('room_id',$id)->where('status','รอรับของ')->get();
        return view('rooms.showPackages',['packages' => $packages]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
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
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
