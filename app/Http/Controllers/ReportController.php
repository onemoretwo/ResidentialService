<?php

namespace App\Http\Controllers;

use App\Report;
use App\Room;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function GuzzleHttp\Promise\all;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reports = Report::all()
            ->where('type', '=', 'รายงาน')
            ->where('status','=','รอการยืนยัน');
        $repairs = Report::all()
            ->where('type', '=', 'แจ้งซ่อม')
            ->where('status','=','รอการยืนยัน');

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
        $report->user_id = Auth::id();
        $report->room_id = $request->input('room_id');
        $report->title = $request->input('title');
        $report->detail = $request->input('detail');
        $report->type = "รายงาน";
        $report->save();

        return redirect()->route('rooms.show.user',['id' => $report->room_id]);
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
        $report = Report::findOrFail($id);
        $report->delete();
        return redirect()->route('reports.index');
    }


    public function seachRoom(Request $request){
        $building = (int)$request->input('building');
        $floor = (int)$request->input('floor');
        $number = (int)$request->input('number');

        $reports = (new Report())->searchFliterReport($building);
        $repairs = (new Report())->searchFilterRepair();

        dd($reports);

//        if (!empty($building)){
//            $reports->where('building_id', '=', $building);
//            $repairs->where('building_id', '=', $building);
//
//            dd($reports);
//
//        }
//        if (!empty($floor)){
//            $reports->where('floor', '=', $floor);
//            $repairs->where('floor', '=', $floor);
//
//        }
//        if (!empty($number)){
//            $reports->where('number', '=', $number);
//            $repairs->where('number', '=', $number);

//        }
//        return view('reports.index',['reports'=> $reports,'repairs'=> $repairs]);





    }

}
