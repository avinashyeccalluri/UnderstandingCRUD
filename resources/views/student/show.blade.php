<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
</head>
<body>
<h1>Firstname: {{$student->firstname}}</h1>
<h2>Lastname: {{$student->lastname}}</h2>
<h3>MobileNumber: {{$student->mobilenumber}}</h3>
<a href="/student/{{$student->id}}/edit">Edit</a>
</body>
</html>
