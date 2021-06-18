<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h2>This is it</h2>


    @foreach($conversation as $conversationn)
        <h2><a href="/conversation/{{ $conversationn->id }}">{{ $conversationn->title }}</a></h2>


        @continue($loop->last)

        <hr>
    @endforeach


</body>
</html>




