<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>Good day</h1>
{{count($data)}}
<br/>
@foreach($data as $users)

{{$users['name']}} <br/>{{$users['address']}}<br/> {{$users['email']}}<br/>{{$users['phone']}}

@endforeach

</body>
</html>
