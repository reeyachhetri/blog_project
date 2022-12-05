<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">



    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Post Blog</title>
	<link rel="stylesheet" href= "{{asset('frontend_assets/fontawesome/css/all.min.css')}}"> <!-- https://fontawesome.com/ -->
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet"> <!-- https://fonts.google.com/ -->
    <link href="{{asset('frontend_assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend_assets/css/templatemo-xtra-blog.css')}}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <header>
        <i class='bx bxl-c-plus-plus size'></i>
            <a href="{{route('welcome')}}" class="brand">Blogme</a>

        </header>
        <div class="mid">
        <h1 style="text-align: center">Details</h1>
        <div class="middle1">
        <img class="card-img-top" src="{{asset('img/course.jpg')}}" alt="Card image cap">
        <br>
        <h2>{{$posts->title}}</h2>
        <br>
        <h4>Description :</h4>  <p> {{$posts->body}} </p>
         <br>
        </div>
        </div>
        <main class="tm-main">
            <footer class="row tm-row">
                <hr class="col-12">
                <div class="col-md-6 col-12 tm-color-gray tm-copyright">
                    Copyright 2020 BlogMe Co. Ltd.
                </div>
            </footer>
        </main>
    </div>



</body>
</html>
