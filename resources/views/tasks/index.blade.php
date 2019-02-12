@extends('layouts.app')

@section('content')
	<h1>Todo-items</h1> 
	@if (count($tasks) > 0)
		<p>{{count($tasks)}} items</p>
		<table class="table">
		    <thead>
		        <tr>		           
		            <th scope="col">Duedate</th> 
		            <th scope="col">Todo</th>
		            <th scope="col">Actions</th>
		        </tr>
		  	</thead>
			<tbody>
				@foreach ($tasks as $task)
					<tr>
						<td>{{$task->due_date}}</td>
						<td>{{$task->description}}</td>						
						<td>
							<a href="/tasks/{{$task->id}}"  class="btn btn-outline-primary">View</a>
							<a href="/tasks/{{$task->id}}/edit" class="btn btn-outline-primary">Edit</a>
                            {!!Form::open(['action' => ['TasksController@destroy', $task->id], 'method' => 'POST', 'class' => 'float-right'])!!}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                            {!!Form::close()!!}
						</td>
					</tr>
				@endforeach
		    </tbody>
		</table>
		{{$tasks->links()}}
	@else
		<p>No tasks found</p>
	@endif
@endsection