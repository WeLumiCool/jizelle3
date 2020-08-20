<?php

namespace App\Http\Controllers;

use App\Mail\send;
use App\Props;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
        return view('home');
    }

    public function send(Request $request)
    {
//        dd($request->all());
        $check = Props::where('send_token',$request->_token)->get();
        if (count($check) == 0)
        {
            $bid = new Props();
            $bid->send_token = $request->_token;
            $bid->save();
            $check = 1;
            Mail::to('sales1@jizelle.ru')->send(new send($request->all()));
        }
        else {
            $check = 0;
        }

        return response()->json([
            'status' => 'success',
            'check' => $check
        ]);
    }
}
