<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form action="/student" method='POST'>
  @csrf
  <div>
  <input type="text" name="firstname" placeholder='Enter your firstname' value={{ old('firstname') }} >
  </div><br>
  <div>
  <input type="text" name="lastname" placeholder="Enter your lastname" value={{ old('lastname') }}>
  </div><br>
  <div>
  <input type="text" name="mobilenumber" placeholder="Enter your Mobile number" value={{ old('mobilenumber') }}>
  </div><br>
  <div>
  <input type="submit">
  </div><br>    
  <div>
  <ul>
  @foreach($errors->all() as $error)
  <li>{{ $error }}</li>
  @endforeach
  </ul>
  </div>
  </form>
</body>
</html>
