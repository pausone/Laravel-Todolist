@extends('layouts.app')

@section('content')
	<a href="/tasks" class="btn btn-outline-primary">Go back</a><hr>
	<h1>{{$task->description}}</h1>
	<hr>	
	<p>Due date: {{$task->due_date}}</p>
	<p>Created at: {{$task->created_at}}</p>
	<hr>
	<a href="/tasks/{{$task->id}}/edit" class="btn btn-primary">Edit</a>

	{!!Form::open(['action' => ['TasksController@destroy', $task->id], 'method' => 'POST', 'class' => 'float-right'])!!}
		{{Form::hidden('_method', 'DELETE')}}
		{{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
	{!!Form::close()!!}
@endsection