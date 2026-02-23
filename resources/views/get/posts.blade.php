<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>All Posts: </h1> <br>

    <?php
        /* foreach ($posts as $i)
            {
                echo "<br> <h2>". $i["id"]. ". </h2>";
                echo "Name: ". $i["name"]. "<br>";
                echo "Surname: ". $i["surname"]. "<br>";
                echo "Email: ". $i["email"]. "<br>";
            } */
    ?>

    @foreach ($posts as $i)
    <br> <h2>{{$i -> id}}.</h2>
    Name: {{$i -> name}} <br>
    Surname: {{$i -> surname}} <br>
    Email: {{$i -> email}} <br>
    <a href = " {{ route('put.edit', $i->id) }} ">Edit</a> <br>
    @endforeach


</body>
</html>