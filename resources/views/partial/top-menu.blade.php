<div class="row">
    <div class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="../"><img style='float:left;'src="{{asset('img/sklogo.png')}}" width='40' height='40'>Steeve Kunze</a>
                <button class="navbar-toggle" data-target="#navbar-main" data-toggle="collapse" type="button">Menu
            </div>
            <div id="navbar-main" class="navbar-collapse  collapse">
                <ul class="nav navbar-nav">
                    <li><a href="{{ route('parcours') }}">Parcours</a></li>
                    <li><a href="{{ route('realisations') }}">Realisations</a></li>
                    <li><a href="{{ route('cv') }}">CV</a></li>
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                        <li><a href="{{route('backoffice')}}">Administration</a></li>
                    @endif
                </ul>
                <button type="button" id="contact" class="btn" data-toggle="modal" data-target="#myModal">
                  Contactez moi
                </button>

        </div>
    </div>
</div>
