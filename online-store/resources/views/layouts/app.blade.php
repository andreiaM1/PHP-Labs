<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <!-- Bootstrap CSS File -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 2 meta tags *must* come first in the head; any other head content must come
    *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    @yield('style')
</head>

<body>
    <div class="collapse navbar-collapse" id="app-navbar-collapse">
        <!-- Left Side Of Navbar -->
        <ul class="nav navbar-nav" style="margin-left:200px">
            @if (!Auth::guest())
            <li><a href="{{ url('/home') }}">Home</a></li>
            @if(auth()->user()->role == 'buyer')
           <li><a href="{{ route('cart')}}">Shopping Cart</a></li>
           @if(count((array) session('cart'))>0)
           <li><span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span></li>
           @endif
           @endif
           @endif
        </ul>
        <!-- Right Side Of Navbar -->
        <ul class="nav navbar-nav navbar-right" style="margin-right:200px">
            <!-- Authentication Links -->
            @if (Auth::guest())
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('register') }}">Register</a></li>
            @else
            @if(auth()->user()->role == 'buyer')
            <li><a href="{{ url('/buyer-dashboard') }}">Products</a></li>
             <li><a href="{{ url('/orders') }}">Orders</a></li>
            @else
            <li><a href="{{ url('/admin-products') }}">Manage Products</a></li>
            <li><a href="{{ url('admin-orders') }}">Orders</a></li>
            @endif
             <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
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
                        </li>
            @endif
        </ul>
    </div>
    <div class="container" style="max-width:85%;">
        <nav class="navbar navbar-default" style="z-index:-1;">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="/home">Online Store </a>
                </div>
                <ul class="nav navbar-nav">
                </ul>
            </div>
        </nav>

        <head>
            <h1></h1>
        </head>
        @yield('content')
    </div>
    @yield('scripts')
</body>

</html>
