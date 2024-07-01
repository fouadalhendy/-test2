<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="{{route("tag.show",$idtag)}}" method="post">
        @csrf

        <input type="text" name="ff"  value="{{$idpost}}" style="display: none">
    <button type="submit">arsel</button>
    </form>
</body>
</html>
