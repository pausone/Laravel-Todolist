@extends('layouts.app')

@section('content')
	<a href="/tasks" class="btn btn-outline-primary">Go back</a><hr>
	<h1>{{$task->description}}</h1>
	<hr>	
	<p>Due date: {{$task->due_date}}</p>
	<p>Category id: {{$task->category_id}}</p>
	<p>Created at: {{$task->created_at}}</p>
	<hr>
	<a href="/tasks/{{$task->id}}/edit" class="btn btn-outline-primary">Edit</a>

@endsection