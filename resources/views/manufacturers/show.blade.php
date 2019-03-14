<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gamers | Manufacturers</title>
</head>
<body>
    <header>
        <p>Gamers</p>
    </header>
    <!-- main>(h1{Manufacturers}+p{Paragraph}+ul>li*3) -->
    <main>
        <h1>Manufacturer: {{ $manufacturer->name}}</h1>
        <p>Paragraph</p>
        <ul>
            <li><b>ID:&#09;</b>{{$manufacturer->id}}</li>
            <li><b>Name:&#09;</b>{{$manufacturer->name}}</li>
            <li><b>City:&#09;</b>{{$manufacturer->city}}</li>
        </ul>
    </main>
    <footer>
        <p>Footer here!</p>
    </footer>
</body>
</html>