@extends('layout')
@section('content')
  <div class="admin col-lg-5 col-md-3 col-sm-4">
    <div class="list-group table-of-contents">
      <a class="list-group-item" href="../backoffice/ajouter">Ajouter un projet</a>
      <a class="list-group-item" href="../backoffice/editer">Modifier un projet</a>
      <a class="list-group-item" href="../backoffice/supprimer">Supprimer un projet</a>
    </div>
  <div class="noAdmin col-lg-7 alert alert-dismissible alert-danger">
    <button class="close" data-dismiss="alert" type="button">×</button>
    <strong> Vous n'êtes pas autorisé à faire ceci.</strong>
  </div>
</div>
<form class="col-lg-7 col-lg-offset-4" id="formProject" action="{{action('ProjetsController@store')}}" method="post">
    {{csrf_field()}}
     <div class="form-group">
       <label class="control-label" for="titreProjet">Titre du projet</label>
       <input type="text" class="form-control" id="titre" name="titre">
     </div>
     <div class="form-group">
       <label class="control-label" for="urlProjet">Url du Projet</label>
       <input type="text" class="form-control" id="url" name="url">
     </div>
     <div class="form-group">
       <label class="control-label" for="logoProjet">Logo du projet</label>
       <input type="text" class="form-control" id="logo" name="logo">
     </div>
     <div class="form-group">
       <label class="control-label" for="imageProjet">Image du projet</label>
       <input type="text" class="form-control" id="image" name="image">
     </div>
     <div class="form-group">
       <label class="control-label" for="descriptionProjet">Description du projet</label>
       <input type="text" class="form-control" id="description" name="description">
     </div>
     <div class="form-group">
       <label class="control-label" for="datecreation">Date de creation du projet</label>
       <input type="text" class="form-control datecrea" id="date_creation" name="date_creation">
     </div>
     <div class="form-group">
       <label class="control-label" for="context">Contexte de développement</label>
       <input type="text" class="form-control" id="contexte" name="contexte">
     </div>
     <button type="submit" class="btn btn-primary">Enregistrer ce projet</button>
   </form>
@endsection
