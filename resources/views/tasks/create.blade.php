@extends('layouts.app')

@section('content')
	<a href="/tasks" class="btn btn-outline-primary">Go back</a><br><br>
	<h1>Create task</h1>
	{!! Form::open(['action' => 'TasksController@store', 'method' => 'POST']) !!}
	 <div class="form-group">
	 	{{Form::label('description', 'Todo')}}
	 	{{Form::text('description', '', ['class' => 'form-control', 'placeholder' => 'Description'])}}
	 </div>
	 <div class="form-group">
	 	{{Form::label('due_date', 'Due date')}}
	 	{{Form::text('due_date', '', ['class' => 'form-control', 'placeholder' => 'YYYYMMDD'])}}
	 </div>
	 <div class="form-group">
	 	{{Form::label('category_id', 'Category')}}
	 	{{Form::select('category_id', ['1' => 'Personal', '2' => 'Work'])}}
	 </div>
	{{Form::submit('Submit',['class' => 'btn btn-primary'])}}
	{!! Form::close() !!}	
@endsection