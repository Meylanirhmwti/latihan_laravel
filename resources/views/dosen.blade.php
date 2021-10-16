<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($query as $item)
       {{$item->nipd}},<br>
       {{$item->nama}},<br>
       {{$item->alamat}},
       <hr>
    @endforeach
</body>
</html>
