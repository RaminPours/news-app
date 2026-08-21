<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

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
    
</body>
</html>