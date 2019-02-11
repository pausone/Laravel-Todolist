@extends('layouts.app')

@section('content')
	<a href="/tasks" class="btn btn-outline-primary">Go back</a><br><br>
	<h1>Edit task</h1>
	{!! Form::open(['action' => ['TasksController@update', $task->id], 'method' => 'POST']) !!}
		<div class="form-group">
		 	{{Form::label('description', 'Todo')}}
		 	{{Form::text('description', $task->description, ['class' => 'form-control', 'placeholder' => 'Description'])}}
		</div>
		<div class="form-group">
		 	{{Form::label('due_date', 'Due date')}}
		 	{{Form::text('due_date', $task->due_date, ['class' => 'form-control', 'placeholder' => 'YYYYMMDD'])}}
		</div>
		{{Form::hidden('_method', 'PUT')}}
		{{Form::submit('Submit',['class' => 'btn btn-primary'])}}
	{!! Form::close() !!}	
@endsection