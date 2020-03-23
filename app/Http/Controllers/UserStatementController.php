<?php

namespace App\Http\Controllers;

use App\Package;
use App\User;
use App\UserStatement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserStatementController extends Controller
{
    public function myStatements($id){
        $user = User::findOrFail(Auth::id());
        $n_packages = Package::where('room_id',$id)->where('status','รอรับของ')->count();
        $statements = UserStatement::where('user_id',Auth::id())->get();
        return view('userStatements.showUserStatement',['statements' => $statements,'room' => $id,'user' => $user,'c' => $n_packages]);
    }
}
