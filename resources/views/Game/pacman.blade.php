<!DOCTYPE html>
<html lang="en">
<head>
    <title>HaiZuka - Pacman Game</title>
    <link rel="stylesheet" href="{{asset('game/pacman/css/style.css')}}">
    <meta
        name='viewport'
        content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'
    />
</head>
<style>
    body {
        background-image: url('{{asset('game/pacman/images/background.jpg')}}');
        background-size: cover;
    }
</style>
<body>
<form id ="form_save" action="{{route("game.savescore")}}" method="post">
    @csrf
    <input id = "game_id" name ="game_id" value="{{$game ->id}}" type="hidden">
    <input id="score" name ="score" type="hidden">
</form>

</body>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript" src="{{asset('game/pacman/js/saw.js')}}"></script>
<script type="text/javascript" src="{{asset('game/pacman/js/ArrSaw.js')}}"></script>
<script type="text/javascript" src="{{asset('game/pacman/js/game.js')}}"></script>
</html>
