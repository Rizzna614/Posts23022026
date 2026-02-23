<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Form</h1>

    <form action = "/posts/formcompleted" method = "post">
        @csrf
        Name: <input type="text" name="name"><br>
        Surname: <input type="text" name="surname"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
    </form>
</body>
</html>