<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <title>News Api in Laravel</title>
</head>
<body class="bg-light text-2xl">


    @extends('layouts.app')

    @section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-4">Trump Nieuws</h1>
        <div class="row">
            @foreach ($trumpArticles['articles'] as $article5)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        @if ($article5['urlToImage'])
                            <img src="{{ $article5['urlToImage'] }}" class="card-img-top" alt="...">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $article5['title'] }}</h5>
                            <p class="card-text">{{ $article5['description'] }}</p>
                            <a href="{{ $article5['url'] }}" target="_blank" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        @endsection
    
    @section('foot')
    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p>&copy; 2024 News App. All rights reserved.</p>
    </footer>
    @endsection
</body>

</html>
    