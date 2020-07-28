<?php

namespace App\Http\Controllers;

use App\Pass;
use App\Types;
use App\User;
use Illuminate\Http\Request;

class OperatorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
//        $users = User::all();
//        $types = Types::all();
//        $passes = Pass::all();
        return view('operator.index');
    }

}
