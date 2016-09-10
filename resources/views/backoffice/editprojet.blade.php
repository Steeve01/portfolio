@extends('layout')
@section('content')
@foreach($projet as $table)
  <section id="edit" class="well bs-component col-xs-10 col-xs-offset-1">
      <form action="{{route('backoffice.store')}}" method="post">
        {{csrf_field()}}
        <h3><img src="../{{$table->logo}}"/></h3>
        <input type="text" id="id" name="id" class="form-group" value="{{$table->id}}">
        <label for="newlogo">Nouveau logo : </label>
        <input type="text" id="newlogo" name="newlogo" class="form-group" value="{{$table->logo}}">
        <a href="{{$table->url}}"><img src="../{{$table->image}}"/></a>
        <label for="newimg">Nouvelle image :</label>
        <input type="text" class="form-group" id="newimg" name="newimg" value="{{$table->image}}">
        <p>{{$table->description}}</p>
        <label for="newdesc">Nouvelle description :</label>
        <input type="text" class="form-group" id="newdesc" name="newdesc" value="{{$table->description}}"></textarea>
        <p style='display:block;'><span id="date_created">date de création</span> : {{$table->date_creation}}</p>
        <label for="new_date">Nouvelle date :</label>
        <input type="text" id="new_date" class="datecrea form-group" name="new_date" value="{{$table->date_creation}}">
        <p>{{$table->contexte}}</p>
        <label for="newcontext">Nouveau contexte :</label>
        <input type="text" class="form-group" id="newcontext" name="newcontext" value="{{$table->contexte}}">
        <button class="btn btn-primary" type="submit">Enregistrer</button>
      </form>
  </section>

@endforeach
@endsection
