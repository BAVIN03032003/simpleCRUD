<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student list</title>
</head>
<body>
    <table>
        <thead>
            <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Phone</th>
            <th> </th>
            <th> </th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->age }}</td>
                <td>{{ $student->phone }}</td>
                <td><a href="{{ url('edit/' . $student->id) }}">Edit</a></td>
                <td><a href="{{ url('delete/' . $student->id) }}">Delete</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>