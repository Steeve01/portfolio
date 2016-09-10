@extends('layout')
@section('content')
    <div class="col-xs-10 col-xs-offset-1">
        <h2> Parcours scolaire </h2>
        <h3 class="titre"> études supérieures </h3>
        <h4 class="sous_titre"> formation 3W Academy <img src="{{asset('img/Logo_3wa.png')}}" alt="Logo 3W Academy"></h4>
        <p>  Une fois le DUT Informatique obtenu, il me fallait une spécialisation dans le web afin d'obtenir les compétences souhaitées. C'est pourquoi j'ai choisi de suivre la formation intensive en développement web nommée "3WAcademy", située sur Villeurbanne(69). J'ai pu apprendre et perfectionner mes
          compétences de développeur web, dans de nombreux langages.
          De plus j'ai aussi appris à utiliser certains frameworks vraiment intéréssants.
        <a href="" data-toggle="modal" data-target="#myCompetences">(voir les compétences)</a>  </p>
        <h4 class="sous_titre"> DUT Informatique à Bourg-en-Bresse <img src="{{asset('img/Logo_Lyon1.png')}}" width="130" height="81"/></h4>
        <p>  Ayant obtenu mon baccalauréat, j'ai alors décidé de postuler à l'IUT lyon 1 de Bourg-en-Bresse, dans la filière informatique, afin d'en connaitre un peu plus dans ce domaine qui me paraissait mon domaine de prédiléction (et qui l'est toujours.). Peu à peu mon intérêt pour le web a grandi durant la 1ere année. En 2eme année j'ai donc pris conscience que c'était dans le web que je voulais travailler et le stage de deux mois éffectué en entreprise n'a pu que le confirmer. Comme dit précédemment, j'ai eu la chance de passer 2 mois en entreprise afin de découvrir le monde du travail, je les ai passé chez M Com' Média, une agence de communication localisée sur Bourg-en-Bresse.   </p>
        <h3 class="titre"> Lycée </h3>
        <p>J'ai eu la chance de passer mes trois dernières années pre-bac dans le Lycée de la Plaine de l'Ain situé à Amberieu-en-Bugey. J'ai pu y étudier la filière scientifique et les sciences de l'ingénieur qui m'ont réellement plongées dans l'informatique et l'envie de connaître ses domaines. En juillet 2012, j'obtiens mon Baccalauréat scientifique S.I. </p>

    </div>
    <div class="col-lg-12 modal fade" id="myCompetences">
          <div class="well bs-component modal-dialog">
            <h2 class="modal_title">Languages :</h2>
            <p>HTML5, CSS3, JavaScript, PHP, MySQL</p>
            <h2 class="modal_title">FrameWorks/Outils:</h2>
            <h3 class="modal_title">PHP</h3>
            <p>Laravel 5</p>
            <h3 class="modal_title">MySQL</h3>
            <p>PhpMyAdmin</p>
            <h3 class="modal_title">CSS :</h3>
            <p>Bootstrap, Sass</p>
            <h3 class="modal_title">JavaScript</h3>
            <p>jQuery, Ajax, AngularJS</p>
          </div>
    </div>
@endsection
