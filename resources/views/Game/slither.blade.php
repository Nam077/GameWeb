<!DOCTYPE html>
<html lang="en">
<head>
    <title>Slither.io | HaiZuka</title>
    <link rel="stylesheet" href="{{asset('game/slither/css/style.css')}}">
    <meta
        name='viewport'
        content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'
    />
</head>
<body>
<form id="form_save" action="{{route("game.savescore")}}" method="post">
    @csrf
    <input id="name_user" value="{{$name}}" type="hidden">
    <input name="game_id" id="game_id" value="{{$game ->id}}" type="hidden">
    <input id="score" name="score" type="hidden">
</form>

</body>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript" src="{{asset('game/slither/js/food.js')}}"></script>
<script type="text/javascript" src="{{asset('game/slither/js/snake.js')}}"></script>
<script type="text/javascript" src="{{asset('game/slither/js/game.js')}}"></script>
</html>
