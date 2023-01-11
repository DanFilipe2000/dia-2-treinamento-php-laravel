<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/calcular" method="POST">
        @csrf
        <input name="num1">
        <input name="num2">
        <button type="submit">Somar</button>
    </form>
</body>
</html>