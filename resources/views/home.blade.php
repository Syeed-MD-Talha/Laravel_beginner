<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>This is my first laravel project guys</h1>

    @foreach ($task as $item)
        <div>
            <a href="{{ route('id_page', ['id' => $item->id]) }}">{{ $item->title }}</a>
        </div>
    @endforeach

</body>

</html>
