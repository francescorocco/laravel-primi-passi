<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Goodbye</title>
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
        <h1>Goodbye from: {{$personal_name}} {{$personal_lastname}} della classe n. {{$class_number}}</h1>
    </main>
</body>
</html>