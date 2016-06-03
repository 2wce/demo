@extends('templates.default')
@section('content')
<div id="wrapper" style = "margin-left :-7%;">
    <div id="layout-static">
<div class="static-sidebar-wrapper sidebar-default" style = "width : 200px;">
  @include('templates.left_nav')
</div>
<div class="static-content-wrapper">
    <div class="static-content">
        <div class="page-content">
          <!----  <ol class="breadcrumb">

<li><a href="index.html">Home</a></li>
<li class="active"><a href="profile.html">Profile</a></li>

            </ol>--->
            <div class="container-fluid">

<div data-widget-group="group1">
<div class="row">
  <div class="col-sm-12">
    <div class="tab-content">
  <div class="panel panel-default">
      <div class="panel-heading">
        <h2>{{$type->name}}</h2> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      </div>
    <div class="panel-body">
          <div class="about-area">

            <div class = "row">
            @foreach($services as $service)

              <div class = "col-sm-3">
                <a href="{{ route('services.show', $service->id) }}" >
                  <img  class = "img-responsive" style = ""  src="{{url($service->base_image)}}">
                <h3>{{ $service->name }}</h3>

                <p>${{ $service->charge}}</p>


              </a>
        <a href = "{{ route('profile.index', ['username' => $service->user->username]) }}"> Sold By : {{$service->user->username}}</a>



                <hr>
              </div>

              <!---- This is where Categories should appear ---->

            @endforeach

      </div>



      </div>


    </div>
  </div>


	</div>
	</div>
  	</div>
  </div>
  </div>
    </div>
  </div>
  </div>
    </div>





@stop
