<?php

namespace App\Http\Controllers;

use App\donation;
use Carbon\Carbon;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = \Auth::user()->id;
        $donate = donation::select()->where('user_id',$user)->get();
        $total = donation::select()->where('user_id',$user)->pluck('amount');


        return view('home',compact('donate','total'));
    }
    public  function receipt(Request $request){

        $id = $request->receipt_no;
       $donate = donation::select()->where('receipt_no',$id)->first();
        $date = Carbon::now();

       return view('receipt',compact('donate','date'));

    }
}
