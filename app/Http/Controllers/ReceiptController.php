<?php

namespace App\Http\Controllers;

use App\Building;
use App\Report;
use App\Room;
use App\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class ReceiptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $users = User::where( 'created_at', '<', Carbon::now()->subMonth(1))
//            ->get();

//        dd($users);

        return view('receipts.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('receipts.create',['reports' => null]);

    }

    public function billCreateShowReport(Request $request){
        $now = Carbon::now();
        dd($now);

//        $building_name = $request->input('building_name');
//        $building_id = Building::where('name',$building_name)->first()->id;
//        $building_floor = $request->input('building_floor');
//        $room_number = $request->input('room_number');
//        $room_id = Room::where('building_id',$building_id)->where('floor',$building_floor)->where('number',$room_number)->first()->id;
//
//
//        $reports = Report::where('room_id',$room_id)->where('type','รายงาน')->where('status','รอการยืนยัน')->get();
//        return view('receipts.create',['reports' => $reports]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $building_name = $request->input('building_name');
        $building_id = Building::where('name',$building_name)->first()->id;
        $building_floor = $request->input('building_floor');
        $building_floor = $request->input('building_floor');
        $room_number = $request->input('room_number');
        $user = Auth::id();

        dd($user);







    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
