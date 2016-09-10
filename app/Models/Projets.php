<?php

  namespace App\Models;

  use Illuminate\Database\Eloquent\Model;
  use DB;

  class Projets extends Model
  {
    protected $table="projet";
    protected $dateFormat='d-m-Y';
    

    public static function allProjets(){

      $resultat= DB::table('projet')->get();


      return $resultat;
    }
    public static function projetId($id){
      $resultat=DB::table('projet')->where('id',$id)->get();
      return $resultat;
    }
    public static function store($request){
      DB::table('projet')->insert(
      [
        'titre' => $request->titre,
        'url' => $request->url,
        'logo' => $request->logo,
        'image' => $request->image,
        'description' => $request->description,
        'date_creation' => $request->date_creation,
        'contexte' => $request->contexte,
      ]);
    }
    public static function storesup($request){
      DB::table('projet')->where('id', $request->id)->delete();
    }
    public static function edit($request){
      DB::table('projet')->where('id', $request->id)->update(
      [
        'logo'=>$request->newlogo,
        'image'=>$request->newimg,
        'description'=>$request->newdesc,
        'date_creation'=>$request->new_date,
        'contexte'=>$request->newcontext,
      ]);
    }
  }


?>
