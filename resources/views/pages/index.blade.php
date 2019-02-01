@extends('layouts.app')

@section('title')
	<h1>Welcome to Todo!</h1> 
@endsection

@section('content')
	<p>This is the start page</p> 	
	<a href="/about">About</a>
	<a href="/services">Services</a>
	@php
		$name = 'Paula';
		$age = 40;

		$compact = compact('name', 'age');
		//$compact = compact($name, $age);
		echo '<br><br>';
		var_dump($compact);


		$arr = array('name' => 'Paula', 'age' => 40);

		echo '<br><br>';
		var_dump($arr);
	@endphp
@endsection
