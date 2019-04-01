@extends('layouts.app')
@section('content')
	<h1>Todo items</h1> 
	@if (count($tasks) > 0)
		<center>
			<table id="myTable" class="table">
			    <thead>
			        <tr>		            
			            <th scope="col"><span class="th-sort">Sort by: </span>Todo</th>
			            <th class="col-due-date" scope="col"><span class="th-sort">Sort by: </span>Duedate</th> 
			            <th id="th-actions" scope="col">Actions</th>
			        </tr>
			  	</thead>
				<tbody>
					@foreach ($tasks as $task)
						<tr>						
							<td data-th="Todo:">{{$task->description}}</td>	
							<td data-th="Due Date:" class="col-due-date">{{$task->due_date}}</td>					
							<td data-th="Actions:" class="col-actions">
								<a href="/tasks/{{$task->id}}" class="btn btn-outline-primary btn-sm" title="Details"><i class="fas fa-info"></i></a>
								<a href="/tasks/{{$task->id}}/edit" class="btn btn-outline-primary btn-sm" title="Edit"><i class="fas fa-pencil-alt"></i></a>
	                            {!!Form::open(['action' => ['TasksController@destroy', $task->id], 'method' => 'POST', 'class' => 'float-right'])!!}
	                                {{Form::hidden('_method', 'DELETE')}}
	                                {{Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm',  'title' => 'Details'])}}
	                            {!!Form::close()!!}
							</td>
						</tr>
					@endforeach
			    </tbody>
			</table>
		</center>
	@else
		<p>No tasks found</p>
	@endif
@endsection