<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
   <title>Create new blog</title>

</head>
<body>
<form method="POST" action=" {{ route('add-blog') }} ">
    @csrf
    <input type="text" name="ID" placeholder="ID">
    <input type="text" name="Title" placeholder="Title">
    <input type="text" name="Body" placeholder="some text">
    <button type="submit">Send</button>
    </form>
</bode>
</html>