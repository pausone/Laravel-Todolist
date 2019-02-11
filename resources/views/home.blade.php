@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Your Dashboard</div>              
            </div>
        </div>
    </div>


    <h1>Todo-items</h1> 
    @if (count($tasks) > 0)
        <p>{{count($tasks)}} items</p>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Todo</th>
                    <th scope="col">Duedate</th>
                    <th scope="col">Actions</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <th scope="row">{{$task->id}}</th>
                        <td>{{$task->description}}</td>
                        <td>{{$task->due_date}}</td>
                        <td><a href="/tasks/{{$task->id}}"  class="btn btn-outline-primary">View</a></td>
                        <td><a href="/tasks/{{$task->id}}/edit" class="btn btn-outline-primary">Edit</a></td>
                        <td>
                            {!!Form::open(['action' => ['TasksController@destroy', $task->id], 'method' => 'POST', 'class' => 'float-right'])!!}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                            {!!Form::close()!!}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
{{--         {{$tasks->links()}} --}}
    @else
        <p>No tasks found</p>
    @endif


</div>
@endsection
