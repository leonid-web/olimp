<?php

namespace App\Http\Controllers;

use App\Pass;

use App\Statuses;
use App\Types;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
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
        $passes = Pass::all();
        $statuses=Statuses::all();
        return view('admin.index', ['passes'=>$passes, 'statuses'=>$statuses]);
    }
//    public function update($id, Request $request){
//
//        $pass = Pass::find($id);
//        dd($request);
//        $pass ->fill($request->all());
//        $pass->save();
//        return back();
//    }
    public function update($id, Request $request){

        $pass=Pass::find($id);
                if ($request->status=='Одобрено'){
                    $pass->update([
                        'prob'=>''
                        ]+$request->all());
                    return back();
                };
            if ($request->status=='Истек'){
                $pass->update([
                        'prob'=>''
                    ]+$request->all());
                return back();
            };
         $pass->update($request->all());
          return back();

    }

}
