<!DOCTYPE html>
<html lang="en">
<head>
    <title>HaiZuka - Shoot number ball Game</title>

    <link rel="stylesheet" href="{{asset('game/line98/css/style.css')}}">
    <style>
        body {
            background-image: url("{{asset('game/line98/images/background.jpg')}}");
            background-size: cover;
        }
    </style>
    <meta
        name='viewport'
        content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'/>
</head>

<body>
<body>
<form id="form_save" action="{{route("game.savescore")}}" method="post">
    @csrf
    <input id="game_id" name="game_id" value="{{$game ->id}}" type="hidden">
    <input id="score" name="score" type="hidden">
</form>

</body>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript" src="{{asset('game/line98/js/game.js')}}"></script>
</html>
