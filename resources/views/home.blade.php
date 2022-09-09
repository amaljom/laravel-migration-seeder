<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @include('Includes.Header')

    <ol>
        @foreach($trains as $train)
            <li>
                {{$train->id}} - {{$train->company}} - {{$train->train_code}} - {{$train->departure_station}} - {{$train->arrival_time}}
            </li>
        @endforeach
    </ol>

</body>
</html>