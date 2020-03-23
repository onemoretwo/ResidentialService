<?php

namespace App\Http\Controllers;

use App\Bill;
use App\BookingRequest;
use App\Room;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $requests = BookingRequest::all()
        ->where('status','=','รอการยืนยัน');
//        dd($requests);
        return view('requests.index',['requests' => $requests ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param $room
     * @return \Illuminate\Http\Response
     */
    public function create($room)
    {
        $room = Room::findOrFail($room);
        return view('requests.create', [ 'room'  => $room ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $req = new BookingRequest;
        $req->user_id = $request->input('user_id');
        $req->room_id = $request->input('room_id');
        $req->checkIn_at = $request->input('checkin_date');

        $room = Room::findOrFail($request->input('room_id'));
        $room->available = 'no';
        $room->save();


        $req->save();
        return redirect()->route('home.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $request = BookingRequest::findOrFail($id);
        return view('requests.show',['request' => $request]);

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
        $user_now = Auth::id();
        $request = BookingRequest::findOrFail($id);
        $room = Room::findOrFail($request->room_id);
        $request->admin_id = $user_now;
        $request->status = 'ยืนยันแล้ว';
        $request->save();


        $user = User::findOrFail($request->user_id);
        $user->room_id = $request->room_id;
        $user->checkIn_at = $request->checkIn_at;
        $user->save();



        $bill = new Bill();
        $bill->room_id = $room->id;
        $bill->user_id = $user_now;
        $bill->water_unit = 0;
        $bill->electric_unit = 0;
        $bill->room_price = $room->type->price;
        $bill->total_price = ($room->type->price) * 2;
        $bill->status = 'รอชำระ';
        $bill->bill_date_at = $user->checkIn_at;

        $bill->save();


        return redirect()->route('requests.index');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $request = BookingRequest::findOrFail($id);


        $request->delete();



//        $requests = BookingRequest::all()
//            ->where('status','=','รอการยืนยัน');
        return redirect()->route('requests.index');

    }
}
