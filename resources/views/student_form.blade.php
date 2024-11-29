<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student</title>
</head>
<body>
    <h1>STUDENT INPUT FORM</h1>
    <form action="/store" method="POST">
    @csrf
        <label for="name">Student Name:</label>
        <input type="text" id="" name="name"><br><br>
        <label for="age">Student age:</label>
        <input type="text" id="" name="age"><br><br>
        <label for="phone">Student phone:</label>
        <input type="text" id="" name="phone"><br><br>
        <input type="submit" type="button" value="create">
        

    </form>
    
</body>
</html>