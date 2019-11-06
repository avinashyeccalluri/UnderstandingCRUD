<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  The first names area <br> <hr>
  @foreach($student as $a)
      <a href="/student/{{$a->id}}">
      {{$a->firstname}}<br>
        </a>
        {{$a->lastname}}<br>
        {{$a->mobilenumber}}<br>
        
  @endforeach
</body>
</html>
