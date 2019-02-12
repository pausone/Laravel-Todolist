@extends('layouts.app')

@section('content')
<div class="jumbotron">
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1> 
        <p>Handle your todo list with Todo</p>
        @if(!Auth::check())
        	<p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
        @endif
	</div>
</div>
@endsection
