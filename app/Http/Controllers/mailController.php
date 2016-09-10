<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;



class mailController extends Controller
{
  protected $redirectTo = '/';


  public function send(Request $request){
    $sujet = $request->input('sujet');
    Mail::send(['html' => 'emails.test'],
    [
     'mailName' => $request->input('name'),
     'mailPrenom' => $request->input('prenom'),
     'mailEntreprise' =>$request->input('entreprise'),
     'mailSujet'=>$request->input('sujet'),
     'mailMessage'=>$request->input('message')
   ], function($message) use($sujet){
      $message->to('steevekunze@gmail.com', 'mailPrenom')->from('portfoliosteevekunze@gmail.com')->subject($sujet);

    });
    return redirect('/');
  }
}
