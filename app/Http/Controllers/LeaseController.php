<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeaseController extends Controller
{
//    /**
//     * Create a new controller instance.
//     *
//     * @return void
//     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    public function register() {
        return view('leases.register');
    }
}
