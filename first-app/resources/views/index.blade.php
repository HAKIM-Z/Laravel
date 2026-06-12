@php
$id=8;
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>index page</h1>

    {{$id}}

    <br>

    @for ($i = 0; $i < 5; $i++)
        {{ $i }} <br>
    @endfor
    
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore,
            quod commodi veritatis eos, incidunt nulla ducimus amet optio
            quis similique qui.Odit minima commodi illo. Non temporibus
            fuga provident sunt?
    </p>
    
</body>

</html>