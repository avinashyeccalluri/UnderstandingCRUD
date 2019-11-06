<!DOCTYPE html>
<html>
<head>

</style>
<meta charset="UTF-8">
<title>Title of the document</title>
</head>
<body>

<h1>Firstname: {{$student->firstname}}</h1>
<h2>Lastname: {{$student->lastname}}</h2>
<h3>MobileNumber: {{$student->mobilenumber}}</h3>
@if($student->tasks->count())
<div>
@foreach($student->tasks as $task)
<form action="/tasks/{{$task->id}}" method="post">
@method('PATCH')
@csrf
<label for="completed" {{$task->Completed ? 'is-complete':''}}>
<input type="checkbox" name="completed" id="" onChange="this.form.submit()" {{$task->Completed ? 'checked':''}}>{{$task->Description}}
</label>
</form>
@endforeach
@endif
</div>
<a href="/student/{{$student->id}}/edit">Edit</a>

</body>
</html>
