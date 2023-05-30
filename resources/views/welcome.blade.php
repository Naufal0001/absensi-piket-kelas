<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aplikasi</title>
    @extends('partials.link')
</head>

<body class="text-slate-200 bg-slate-800">
    <form action="/login" method="POST">
        @csrf
        email<input type="email" name="email" required id="">
        pw<input type="password" name="password" required id="">
        <button type="submit">Login</button>
    </form>

</body>

</html>
