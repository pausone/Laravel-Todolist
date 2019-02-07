@extends('layouts.app')

@section('content')
	<a href="/tasks" class="btn btn-outline-primary">Go back</a><br><br>
	<h1>{{$task->description}}</h1>	
	<p>Due date: {{$task->due_date}}</p>
	<p>Category id: {{$task->category_id}}</p>
	<p>Created at: {{$task->created_at}}</p>
@endsection