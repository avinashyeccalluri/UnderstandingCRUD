<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
</head>

<body>
    <form method='POST' action="/student/{{$student->id}}" >
    @csrf
    @method('PATCH')
    <div>
    <input type="text" name="firstname" placeholder='Enter your firstname' value="{{$student->firstname}}" required>
    </div><br>
    <div>
    <input type="text" name="lastname" placeholder="Enter your lastname" value="{{$student->lastname}}" required>
    </div><br>
    <div>
    <input type="text" name="mobilenumber" placeholder="Enter your Mobile number" value="{{$student->mobilenumber}}" required>
    </div><br>
    <div>
    <input type="submit" value="Update">
    </div><br>
    </form>
    <form  action="/student/{{$student->id}}" method="post">
    @csrf
    @method('PATCH')

        <div>
        <input type="submit" value="Delete">
        </div><br>
    </form>
</body>

</html>
