<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 11/06/18
 * Time: 21:49
 */?>

<!doctype html>
<html>

<head>

    <title>Show</title>

</head>

<body>

@foreach($tasks as $tasks)
    <h1>{{ $tasks}}</h1>
@endforeach
</body>

</html>