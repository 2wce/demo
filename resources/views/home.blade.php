@extends('templates.default')
@section('content')

	<h2>Welcome to Chatty!</h2>

@if(Auth::check())
{{ $cook  = Auth::user()->username }}
	@foreach ($user->friends() as $user)
					@include('templates.partials.chat')

	    @endforeach
@endif


@stop