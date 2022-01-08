<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('game/moneychange/css/style.css')}}">
    <title>Money Game</title>
</head>

<body>
<form id ="form_save" action="{{route("game.savescore")}}" method="post">
    @csrf
    <input id = "game_id" name ="game_id" value="{{$game ->id}}" type="hidden">
    <input id="score" name ="score" type="hidden">
</form>

</body>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{asset('game/moneychange/js/money.js')}}"></script>
<script src="{{asset('game/moneychange/js/game.js ')}}"></script>

</html>
