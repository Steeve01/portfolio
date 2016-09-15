@extends('layout')
@section('content')
  <div class="admin col-lg-7 col-md-3 col-sm-4">
    <div class="list-group table-of-contents">
      <a class="list-group-item" href="backoffice/ajouter">Ajouter un projet</a>
      <a class="list-group-item" href="backoffice/editer">Modifier un projet</a>
      <a class="list-group-item" href="backoffice/supprimer">Supprimer un projet</a>
    </div>
  </div>

    <script type="text/javascript">
        if($.url("query").split("=")[3]=='no'){
            $('.noAdmin').css({
              'display':'block'
            });
          }

    </script>
  <div class="noAdmin col-lg-7 alert alert-dismissible alert-danger">
    <button class="close" data-dismiss="alert" type="button">×</button>
    <strong> Vous n'êtes pas autorisé à faire ceci.</strong>
  </div>
@endsection
