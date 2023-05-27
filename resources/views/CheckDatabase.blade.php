<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Jadwal</h1>
    <div>
        @foreach ($Shedulles as $Shedulle)
            <h1>{{ $Shedulle->hari }}</h1>
            <ul>
                @foreach ($Shedulle->Siswa as $item)
                <li>{{ $item->nama }}</li>
                @endforeach
            </ul>
        @endforeach
    </div>
</body>
</html>