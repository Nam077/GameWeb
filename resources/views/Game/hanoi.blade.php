<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ha Noi Towers | HaiZuka</title>
    <link rel="stylesheet" href="{{asset('/game/hanoitower/css/style.css')}}">
    <meta
        name='viewport'
        content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'
    />
</head>
<style>
    body{
        background-image: url("{{asset('game/hanoitower/images/background.jpg')}}");
        background-size: cover;
    }
</style>
<body>
<canvas id = 'canvas'></canvas>
</body>
<script type="text/javascript" src="{{asset('game/hanoitower/js/rectangle.js')}}"></script>
<script type="text/javascript" src="{{asset('game/hanoitower/js/HaNoiTower.js')}}"></script>
</html>
