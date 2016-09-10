@extends('layout')
@section('content')
  <div class="admin col-lg-7 col-md-3 col-sm-4">
    <div class="list-group table-of-contents">
      <a class="list-group-item" href="../backoffice/ajouter">Ajouter un projet</a>
      <a class="list-group-item" href="../backoffice/editer">Modifier un projet</a>
      <a class="list-group-item" href="../backoffice/supprimer">Supprimer un projet</a>
    </div>
  </div>
  <div class="noAdmin col-lg-7 alert alert-dismissible alert-danger">
    <button class="close" data-dismiss="alert" type="button">×</button>
    <strong> Vous n'êtes pas autorisé à faire ceci.</strong>
  </div>
  <div class="row col-lg-12" id="projects">
    <h1 id="realisations_title"> Editer un projet </h1>
      @foreach($projet as $table)
        <section class="well bs-component col-xs-10 col-xs-offset-1">
            <article>
              <h3><img src="../{{$table->logo}}"/></h3>
              <a href="{{$table->url}}"><img src="../{{$table->image}}"/></a>
              <a style="display:block;" href="{{action('ProjetsController@indexEditProjet', [$table->id])}}">Editer ce projet</a>
            </article>
        </section>
      @endforeach

  </div>



@endsection
