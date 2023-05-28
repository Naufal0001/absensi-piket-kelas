<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @extends('partials.link')
</head>

<body>

    @include('partials.navbar')

    @include('partials.sidebar')

    @yield('content')

</body>

</html>
