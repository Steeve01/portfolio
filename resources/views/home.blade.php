@extends('layout')
@section('content')
  <div id="presentation" class="col-xs-10 col-xs-offset-1">
      <img id="profile" src="{{asset('img/profil.png')}}" width="100px" height="auto" alt="profile Steeve Kunze"/>
      <p id="p1">
        Je suis <strong>Steeve Kunze</strong>, un jeune diplômé de DUT Informatique ainsi que de la 3W Academy. Je souhaite m'orienter dans une carrière de Webmaster/Développeur Web. J'ai 21 ans, je suis un passionné d'informatique Web, de sports tels que le Volleyball ou la musculation, de la musique en tout genre ainsi que des jeux vidéos. Je suis né à Lyon et ai grandi dans un petit village appelé Leyment, situé dans l'Ain.
      <p>
      <p>Bienvenue sur mon website steevekunze.fr. Il a été réalisé par mes soins à l'aide des téchnologies suivantes :</p>
        <ul class="list_technos">
          <li>Laravel 5</li>
          <li>Bootstrap</li>
          <li>jQuery</li>
          <li>MySQL</li>
          <li>HTML5/CSS3</li>
        </ul>
      <p>C'est un portfolio qui consiste à présenter ma personne d'un point de vue professionnel, des modifications y seront apportées au fur et à mesure du temps. Bonne visite !</p>
  </div>
@endsection
