<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Welcome to Laravel Practice Home</h1>

    {{-- 
    # I am learning the laravel again
    --}}
    @include('me.info')

    <p>My name is {{$name}}</p>
</body>
</html>