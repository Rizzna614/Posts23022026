<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Form has been completed!</h1> <br>
    <h2>Form results:</h2>
    <?php
        echo "Name: ". $_POST["name"]. "<br>";
        echo "Surname: ". $_POST["surname"]. "<br>";
        echo "Email: ". $_POST["email"]. "<br>";
    ?>

    <br>
    <a href = "/get/posts">Show all posts</a>
</body>
</html>