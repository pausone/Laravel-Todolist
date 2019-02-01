@extends('layouts.app')

@section('title')
	<h1>{{$title}}</h1> 
@endsection

@section('content')
	<p>This is the SERVICES page</p> 
	@if (count($services) > 0)
		<ul>
			@foreach ($services as $service)
				<li>{{$service}}</li>
			@endforeach
		</ul>
	@endif

@endsection
