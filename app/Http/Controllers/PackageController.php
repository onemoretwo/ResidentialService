<?php

namespace App\Http\Controllers;

use App\Package;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packages = Package::where('status','รอรับของ')->orderBy('created_at','desc')->get();
        return view('packages.allPackages',['packages' => $packages]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('packages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => ['required','min:3'],
            'first_name' => ['required'],
            'last_name' => ['required'],
            'detail' => ['required', 'max:500', 'min:3']
        ]);
        $title = $request->input('title');
        $first = $request->input('first_name');
        $last = $request->input('last_name');

        $package = new Package();
        $userId = (new User())->getRoomFromUser($title,$first,$last);
        $user = User::findOrFail($userId);

        $package->user_id = Auth::id();
        $package->recipient = $title . $first . " " . $last;
        $package->room_id = $user->room->id;
        $package->detail = $request->input('detail');
        $package->save();
        return redirect()->route('packages.index');
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

    public function packageConfirm($room_id,$package_id){
        $package = Package::findOrFail($package_id);
        $package->status = 'ได้รับแล้ว';
        $package->save();

        $packages = Package::where('room_id',$room_id)->where('status','รอรับของ')->orderBy('created_at','desc')->get();
        return redirect()->route('room.users.packages',['id' => $room_id]);
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
