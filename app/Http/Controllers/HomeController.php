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
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

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
        $characters='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $random1=substr(str_shuffle($characters), 0, 5);
        $random2= rand(10,99);
        $random = $random1.$random2;
        $filename = time().'.'.$request->photo->getClientOriginalExtension();
        $request->photo->storeAs('public',$filename);
        Pass::create([
                'photo' => url('storage/'.$filename),
                'random'=> $random,
            ]+$request->all());
        return redirect()->action('HomeController@showProfile',['id'=>$random]);
    }
    public function showProfile($random){
        $pass=Pass::where('random', $random)->first();
        return view('profile',['pass'=>$pass]);
    }
}
