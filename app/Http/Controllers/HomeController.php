<?php

namespace App\Http\Controllers;

use App\Pass;
use App\Types;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
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
        $users = User::all();
        $types = Types::all();
        $passes = Pass::all();
        return view('home', ['passes'=>$passes]);
    }
    public function store(Request $request){
        $filename = time().'.'.$request->photo->getClientOriginalExtension();
        $request->photo->storeAs('public',$filename);
        Pass::create([
                'photo' => url('storage/'.$filename),
            ]+$request->all());
        return view('home');
    }
}
