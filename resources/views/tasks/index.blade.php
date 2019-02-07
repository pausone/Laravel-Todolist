@extends('layouts.app')

@section('content')
	<h1>Todo-items</h1> 
	@if (count($tasks) > 1)
		<table class="table">
		    <thead>
		        <tr>
		            <th scope="col">#</th>
		            <th scope="col">Todo</th>
		            <th scope="col">Duedate</th>
		            <th scope="col">Category</th>
		            <th scope="col">Actions</th>
		        </tr>
		  	</thead>
			<tbody>
				@foreach ($tasks as $task)
					<tr>
						<th scope="row">{{$task->id}}</th>
						<td>{{$task->description}}</td>
						<td>{{$task->due_date}}</td>
						<td>{{$task->category_id}}</td>
						<td>
						<a href="/tasks/{{$task->id}}">Edit</a></td>
					</tr>
				@endforeach
		    </tbody>
		</table>
	@else
		<p>No tasks found</p>
	@endif






{{-- 
	<table class="table">
	  <thead>

	  </thead>
	  <tbody>

	    <tr>
	      <th scope="row">2</th>
	      <td>Jacob</td>
	      <td>Thornton</td>
	      <td>@fat</td>
	    </tr>
	    <tr>
	      <th scope="row">3</th>
	      <td>Larry</td>
	      <td>the Bird</td>
	      <td>@twitter</td>
	    </tr>
	  </tbody>
	</table>
	@php
	@endphp --}}
@endsection