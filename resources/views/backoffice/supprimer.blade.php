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
  @foreach($projet as $table)
  <form action="{{route('backoffice.storesup')}}" method="post">
      {{csrf_field()}}
    <section class="well bs-component col-xs-10 col-xs-offset-1">
      <article>
        <input style="display:none;" type="text" name="id" id="id" value="{{$table->id}}">
        <h3><img src="../{{$table->logo}}"/></h3>
        <h4><p>{{$table->titre}}</p></h4>
      </article>
      <button class="btn btn-primary" type="submit">Supprimer</button>
    </section>
  </form>
  @endforeach
@endsection
