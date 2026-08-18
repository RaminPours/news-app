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
            <a class="navbar-brand" href="#">News</a>
        </div>
    </nav>

    @foreach ($techArticles as $article1)
        <div class="card m-3">
            <div class="card-body">
                <h5 class="card-title">{{ $article1['title'] }}</h5>
                <p class="card-text">{{ $article1['description'] }}</p>
                <a href="{{ $article1['url'] }}" class="btn btn-primary" target="_blank">Read more</a>
            </div>
        </div>
    @endforeach
        
    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p>&copy; 2024 News App. All rights reserved.</p>
    </footer>
</body>

</html>