@extends('layouts.app')

@section('content')
	<a href="/tasks" class="btn btn-outline-primary">Go back</a><br><br>
	<h1>Create task</h1>
	{!! Form::open(['id' => 'create-task-form', 'action' => 'TasksController@store', 'method' => 'POST']) !!}
	 <div class="form-group">
	 	{{Form::label('description', 'Todo')}}
	 	{{Form::text('description', '', ['class' => 'form-control', 'placeholder' => 'Description'])}}
	 </div>
	 <div class="form-group">
	 	{{Form::label('due_date', 'Due date')}}
	 	{{Form::text('due_date', '', ['class' => ['form-control', 'datepicker'], 'placeholder' => 'DD/MM/YYYY'])}}
	 </div>
	{{Form::submit('Submit',['class' => 'btn btn-primary'])}}
	{!! Form::close() !!}	
@endsection