<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
<h1>Edit Post: </h1>

<!-- here you gotta create a form with the existing values already previewd in it and then the user can change it and it updates with put and sends it back to the all posts page -->
<form action= "{{ route('put.edited', $posts->id) }}" method="post">
    @csrf
    @method("PUT")
New name: <input type="text" name="name" value = "{{ $posts->name }}"><br>
New surname: <input type = "text" name = "surname" value = "{{ $posts->surname }}"> <br>
New e-mail: <input type="text" name="email" value = "{{ $posts->email }}"><br>
<input type="submit">
</form>
</body>
</html>