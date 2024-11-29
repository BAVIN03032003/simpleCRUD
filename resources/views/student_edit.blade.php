<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student</title>
</head>
<body>
    <h1>STUDENT EDIT FORM</h1>
    <form action="{{ url('update/' . $students->id) }}" method="POST">
    @csrf
        <label for="name">Student Name:</label>
        <input type="text" id="" name="name" value="{{$students->name}}"><br><br>
        <label for="age">Student age:</label>
        <input type="text" id="" name="age" value="{{$students->age}}" ><br><br>
        <label for="phone">Student phone:</label>
        <input type="text" id="" name="phone" value="{{$students->phone}}"><br><br>
        <input type="submit" type="button" value="update">
        

    </form>
    
</body>
</html>