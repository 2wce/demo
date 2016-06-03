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
        <h2>Products Page</h2> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <a href="{{ route('products.create') }}" class="btn btn-info" style = "float:right;">Add New Product</a>
      </div>
    <div class="panel-body">
          <div class="about-area">





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
