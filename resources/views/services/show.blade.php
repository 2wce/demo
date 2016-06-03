@extends('templates.default')

@section('content')

<h1>{{ $service->name }}</h1>
<p class="lead">{{ $service->description }}</p>
<p><small>${{ $service->charge}}</small></p>
	<img  class = "img-responsive" style = ""  src="{{url($service->base_image)}}">
<hr>

<a href="{{ route('services.index') }}" class="btn btn-info">Back to all services</a>
<a href="{{ route('services.edit', $service->id) }}" class="btn btn-primary">Edit service</a>

<div class="col-md-6 text-right">
        {!! Form::open([
            'method' => 'DELETE',
            'route' => ['services.destroy', $service->id]
        ]) !!}
            {!! Form::submit('Delete this service?', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </div>

@stop
