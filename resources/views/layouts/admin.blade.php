<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Administrator - @yield('title')</title>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="/css/materialize/materialize.min.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    </head>

<body>

<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
    <li><a href="#!">Profile</a></li>

    <li class="divider"></li>
    <li>
        <a href="{{ url('/logout') }}"
           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
            Logout
        </a>

        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>

    </li>
</ul>
<nav>
    <div class="nav-wrapper">
        <a href="#!" class="brand-logo">Logo</a>
        <ul class="right hide-on-med-and-down">
            <li><a href="{{url('panel')}}">Home</a></li>
            <li><a href="{{url('panel/users')}}">Usuarios</a></li>
            <!-- Dropdown Trigger -->
            <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Olá, {{ Auth::user()->name }}<i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>
    </div>
</nav>

<div class="container">
    @yield('content')
</div>

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="/js/materialize/materialize.min.js"></script>
<script type="text/javascript" src="/js/init.js"></script>
</body>
</html>