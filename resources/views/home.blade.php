<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Primi passi laravel</title>
</head>
<body>

    <header>
        <ul>
            <li>
                <a href="{{route('home')}}">Home</a>
                <a href="{{route('goodbye')}}">Goodbye</a>
            </li>
        </ul>
    </header>

    <main>
        <div class="container">
            <h1 class="">{{$hello}}</h1>

            <h1>{{$personal_salute}} {{$personal_name}} {{$personal_lastname}}</h1>
        </div>
    </main>
</body>
</html>