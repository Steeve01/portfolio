<?php

namespace App\Http\Controllers;

use App\Models\Projets;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjetsController extends Controller{


  public function index(){

    $projets = Projets::allProjets();
    return view('/realisations', ['projet' => $projets]);

  }
  public function indexEdit(){
    $projets = Projets::allProjets();
    return view('backoffice/editer', ['projet' => $projets]);
  }
  public function indexEditProjet($id){
    $projets = Projets::projetId($id);
    return view("backoffice/editprojet", ['projet' => $projets]);
  }
  public function indexSupprimer(){
    $projets = Projets::allProjets();
    return view('backoffice/supprimer',['projet' => $projets]);
  }
  public function creer(){
    return view('backoffice/creer');
  }
  public function store(Request $request){
    Projets::store($request);
    return redirect('/Realisations');
  }
  public function storesup(Request $request){
    Projets::storesup($request);
    return view('/presentation');
  }
  public function edit(Request $request){
    Projets::edit($request);
    return redirect('/Realisations');
  }
}


 ?>
