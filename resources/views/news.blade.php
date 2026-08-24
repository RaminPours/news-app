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
    <h1 class="text-center mb-4">Tech Nieuws</h1>
    <div class="row">
        @foreach ($techArticles['articles'] as $article)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    @if ($article['urlToImage'])
                        <img src="{{ $article['urlToImage'] }}" class="card-img-top">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $article['title'] }}</h5>
                        <p class="card-text">{{ $article['description'] }}</p>
                        <a href="{{ $article['url'] }}" target="_blank" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    @endsection
    
@section('foot')
<footer class="bg-dark text-white text-center py-3 mt-6">
    <p>&copy; 2024 News App. All rights reserved.</p>
</footer>
@endsection
    

    
</body>

</html>