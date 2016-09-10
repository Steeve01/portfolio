<head>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">
    <link rel="icon" href="{{asset('img/sklogo.png')}}">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
  <!--  <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'> -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
    <title>Steeve Kunze Développeur Web</title>
</head>
<body>
    <div id="main-wrapper">
        @include('partial/top-menu')
        @include('partial/contact')
        @section('content')
        @show
            </div>
        </div>
        @include('partial/footer')
    </div>
    <script src="{{asset('js/jquery-2.2.4.min.js')}}"
            integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
            crossorigin="anonymous"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/url.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
    <script>
      $( function() {
        $( ".datecrea" ).datepicker({dateFormat: "yy-mm-dd"});
      } );
    </script>
    </body>
