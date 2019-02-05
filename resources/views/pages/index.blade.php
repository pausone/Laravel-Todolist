@extends('layouts.app')

@section('title')
	<h1>Welcome to Todo!</h1> 
@endsection

@section('content')
	<p>This is the start page</p> 	
	<a href="/about">About</a>
	<a href="/services">Services</a>
	@php
		//Add table of TODO-items
	@endphp
@endsection
