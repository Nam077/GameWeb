<!DOCTYPE html>
<html lang="en">
<head>
    <title>Shoot Number Ball | HaiZuka</title>
    <link rel="stylesheet" href="{{asset('game/number/css/style.css')}}">
    <meta
        name='viewport'
        content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'
    />
</head>
<style>
    body{
        background-image: url("https://zukahai.github.io/Shoot-number-ball-game/images/background.jpg");
        background-size: cover;
    }
</style>
<body><body>
<form id ="form_save" action="{{route("game.savescore")}}" method="post">
    @csrf
    <input id = "game_id" name ="game_id" value="{{$game ->id}}" type="hidden">
    <input id="score" name ="score" type="hidden">
</form>

</body>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript" src="{{asset('game/number/js/ball.js')}}"></script>
<script type="text/javascript" src="{{asset('game/number/js/game.js')}}"></script>
</html>
