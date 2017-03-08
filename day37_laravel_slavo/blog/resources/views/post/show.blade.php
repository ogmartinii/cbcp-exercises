<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h1>{{$posts->name}}</h1>
<p>{{$posts->content}}</p>
<a href="{{action('PostController@index')}}">Back home</a>
</body>
</html>