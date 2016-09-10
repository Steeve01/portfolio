<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
    public function send(Request $request){
      Mail::send('emails.test',['name' => $request->nom], function($message){
        $message->to('steevekunze@gmail.com','Some guy')->from('portfoliosteevekunze@gmail.com')->subject('Welcome!');
    });
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/backoffice');
    }
}
