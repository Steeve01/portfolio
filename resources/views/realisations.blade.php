@extends('layout')


@section('content')
  <div class="row" id="projects">
    <h1 id="realisations_title"> Liste de mes projets </h1>
      @foreach($projet as $table)
        <section class="well bs-component col-xs-10 col-xs-offset-1">
            <article>
              <h3><img src="{{$table->logo}}"/></h3>
              <a href="{{$table->url}}"><img src="{{$table->image}}"/></a>
              <p>{{$table->description}}</p>
              <p style='display:block;'><span id="date_created">date de création</span> : {{$table->date_creation}}</p>
              <p>{{$table->contexte}}</p>
              <p>Allez jeter un oeil : <br/><a href="{{$table->url}}">{{$table->titre}}</a></p>
            </article>
        </section>
      @endforeach

  </div>
@endsection
