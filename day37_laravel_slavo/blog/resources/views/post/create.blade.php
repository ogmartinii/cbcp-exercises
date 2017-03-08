<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form style="margin: 100px 0 0 100px" method="post" action="{{action('PostController@store')}}">
    {{ csrf_field() }}
    Name<br>
    <input type="text" name="name"><br><br>
    Text<br>
    <textarea name="content" rows="10"></textarea><br>
    <button type="submit">Create</button>
    </form>

    <a href="{{action('PostController@index')}}">Back home</a>
</body>
</html>
