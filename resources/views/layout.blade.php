
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>

    <!-- Bootstrap core CSS -->
    <link :rel="stylesheet" href="{{asset('css/app.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">


</head>

<body>


<nav class="navbar navbar-inverse navbar-fixed-top navbar-expand-md">
    <div class="container">
        <a class="navbar-brand" style="font-size: 15px;" href="{{ url('http://localhost/Proj/Cooking/public/recipes') }}">
            {{ config('app.name', 'Recipes') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item" style="padding-left: 7px;">
                    <a class="nav-link" style="font-size: 15px;" href="{{ url('http://localhost/Proj/Cooking/public/recipes/categories') }}">Category</a>
                </li>
                <li class="nav navbar-nav navbar-right" style="font-size: 15px; padding-left: 7px;">
                    <a class="nav-link" href="http://localhost/Proj/Cooking/public/recipes/create">Create New Recipe</a>
                </li>
            </ul>

            <form class="navbar-form navbar-left" style="padding-left: 50px;">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search recipe">
                </div>
                <button onclick="openWin()" type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
            </form>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav pull-right ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link"  href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @else
                    <li class="nav-item dropdown">

                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            <a class="dropdown-item" href="http://localhost/Proj/Cooking/public/home">Favourites</a>
                            <a class="dropdown-item" href="http://localhost/Proj/Cooking/public/home">Profile</a>
                        </div>
                    </li>

                @endguest
            </ul>
        </div>
    </div>
</nav>

<!-- Main Content -->

    @include('messages')
    @yield('content')
<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">

                <p class="copyright text-muted">Copyright &copy; Your Website 2018</p>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'article-ckeditor' );
</script>
<script src="../js/bootstrap.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Custom scripts for this template -->
<script src="js/clean-blog.min.js"></script>

</body>

</html>