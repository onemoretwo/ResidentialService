<?php

namespace App\Http\Controllers;

use App\Building;
use App\Report;
use App\Room;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reports = DB::table('reports')->select('id','title', 'created_at')
            ->where('type', '=', 'รายงาน')->where('status','=','รอการยืนยัน')->get();

        $repairs = DB::table('reports')->select('id','title', 'created_at')
            ->where('type', '=', 'แจ้งซ่อม')->where('status','=','รอการยืนยัน')->get();
        return view('reports.index',['reports'=> $reports,'repairs'=> $repairs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reports.create');

    }

    public function userCreateReport($id){
        return view('reports.create',['room_id' => $id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $request->validate([
//            'title' => ['required','max:100','min:3'],
//            'detail' => ['required','max:500','min:3']
//        ]);

        $report = new Report();
        $building_name = $request->input('building_name');
        $building_id = Building::where('name',$building_name)->first()->id;
        $building_floor = $request->input('building_floor');
        $room_number = $request->input('room_number');
        $room_id = Room::where('building_id',$building_id)->where('floor',$building_floor)->where('number',$room_number)->first()->id;
        $current_room_id = $request->input('room_id');
        $report->user_id = Auth::id();
        $report->room_id = $room_id;
        $report->title = $request->input('title');
        $report->detail = $request->input('detail');
        $report->type = "รายงาน";
        $report->save();
//
        return redirect()->route('rooms.show.user',['id' => $current_room_id]);
    }

    public function storeRepair(Request $request)
    {
//        $request->validate([
//            'title' => ['required','max:100','min:3'],
//            'detail' => ['required','max:500','min:3']
//        ]);

        $report = new Report();
        $report->user_id = Auth::id();
        $report->room_id = $request->input('room_id');
        $report->title = $request->input('title');
        $report->detail = $request->input('detail');
        $report->type = "แจ้งซ่อม";
        $report->save();

        return redirect()->route('rooms.show.user',['id' => $report->room_id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('reports.show');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $report = Report::findOrFail($id);
        $room = Room::findOrFail($report->room_id);
        return view('reports.edit',['report' => $report, 'room' => $room]);

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
        $report = Report::findOrFail($id);
        $report->status = 'อนุมัติ';
        $report->save();

        return redirect()->route('reports.index');




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
