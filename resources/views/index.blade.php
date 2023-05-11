<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>

</head>
<body>


<h1> welcome to the worl</h1>

<table class="bg-green-500">

<tr class="p-5 m-2">
    <td class="p-5 m-2">name</td>
    <td class="p-5 m-2">email</td>
    <td class="p-5 m-2">address</td>
</tr>


    <tr>
    @foreach( $users as $datas)


        <td class="p-5 m-2">{{$datas['name']}}</td>
        <td class="p-5 m-2">{{$datas['email']}}</td>
        <td class="p-5 m-2">{{$datas['address']}}</td>

    @endforeach
    </tr>

</table>

</body>
</html>


