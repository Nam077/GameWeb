<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sokoban | HaiZuka</title>
    <link rel="stylesheet" href="{{asset('game/sokoban/css/style.css')}}">
    <meta
        name='viewport'
        content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'
    />
</head>
<style>
    body {
        background-image: url("{{asset('game/sokoban/images/abackground.png')}}");
        background-size: cover;
    }
</style>
<body>
<form id="form_save" data-url="{{route("game.savescore")}}" action="{{route("game.savescore")}}" method="post">
    @csrf
    <input name="game_id" value="{{$game ->id}}" type="hidden">
    <input id="score" name="score" type="hidden">
</form>n
</body>
<script src="http://crypto-js.googlecode.com/svn/tags/3.1.2/build/rollups/aes.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript" src="{{asset('game/sokoban/js/game.js')}}"></script>
</html>
