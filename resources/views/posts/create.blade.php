<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 11 | Posts</title>
</head>
<body>
    <h1>Form to create a new post</h1>
    <form action="/posts" method="POST">
        @csrf
        <label for="">
            Titulo
            <input type="text" name="title">
        </label>
        <br><br>
        <label for="">
            Categoría
            <input type="text" name="category">
        </label>
        <br><br>
        <label for="">
            Contenido
            <textarea name="content" id="" cols="30" rows="10"></textarea>
        </label>
        <br><br>
        <button type="submit">Crear post</button>
    </form>
</body>
</html>