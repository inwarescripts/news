<!doctype html>
<html lang="{{config('app.locale')}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chat</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>
<body>
    <div id="app">
        <h1>Chat room</h1>
		<chat-message></chat-message>
        <chat-log></chat-log>
		<chat-composer></chat-composer>
    </div>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
