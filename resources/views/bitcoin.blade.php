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

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('index') }}">Tech Nieuws</a>
            <a class="navbar-brand" href="{{ route('business') }}">Business Nieuws</a>
            <a class="navbar-brand" href="{{ route('overige') }}">Overige</a>
            <a class="navbar-brand" href="{{ route('bitcoin') }}">Bitcoin Nieuws</a>
             <a class="navbar-brand" href="{{ route('trump') }}">Trump Nieuws</a>
              <a class="navbar-brand" href="{{ route('bbc') }}">BBC Nieuws</a>
        </div>
    </nav>

    <div class="container mt-5">
        <h1 class="text-center mb-4">Bitcoin Nieuws</h1>
        <div class="row">
            @foreach ($bitcoinArticles['articles'] as $article4)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        @if ($article4['urlToImage'])
                            <img src="{{ $article4['urlToImage'] }}" class="card-img-top" alt="...">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $article4['title'] }}</h5>
                            <p class="card-text">{{ $article4['description'] }}</p>
                            <a href="{{ $article4['url'] }}" target="_blank" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    
    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p>&copy; 2024 News App. All rights reserved.</p>
    </footer>
</body>

</html>
    