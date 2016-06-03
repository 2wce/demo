<link type="text/css" href="{{asset('css/select.css')}}" rel="stylesheet">

<style>
  .searchable-container{margin:20px 0 0 0}
  .searchable-container label.btn-default.active{background-color:#007ba7;color:#FFF}
  .searchable-container label.btn-default{width:90%;border:1px solid #efefef;margin:5px; box-shadow:5px 8px 8px 0 #ccc;}
  .searchable-container label .bizcontent{width:100%;}
  .searchable-container .btn-group{width:90%}
  .searchable-container .btn span.glyphicon{
      opacity: 0;
  }
  .searchable-container .btn.active span.glyphicon {
      opacity: 1;
  }

  .list {
  font-family:sans-serif;
  margin:0;
  padding:20px 0 0;
  }
  .list > li {
  display:block;
  background-color: #eee;
  padding:10px;
  box-shadow: inset 0 1px 0 #fff;
  }
  .avatar {
  max-width: 150px;
  }
  img {
  max-width: 100%;
  }
  h3 {
  font-size: 16px;
  margin:0 0 0.3rem;
  font-weight: normal;
  font-weight:bold;
  }
  p {
  margin:0;
  }

  input {
  border:solid 1px #ccc;
  border-radius: 5px;
  padding:7px 14px;
  margin-bottom:10px
  }
  input:focus {
  outline:none;
  border-color:#aaa;
  }
  .sort {
  padding:8px 30px;
  border-radius: 6px;
  border:none;
  display:inline-block;
  color:#fff;
  text-decoration: none;
  background-color: #28a8e0;
  height:30px;
  }
  .sort:hover {
  text-decoration: none;
  background-color:#1b8aba;
  }
  .sort:focus {
  outline:none;
  }
  .sort:after {
  width: 0;
  height: 0;
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;
  border-bottom: 5px solid transparent;
  content:"";
  position: relative;
  top:-10px;
  right:-5px;
  }
  .sort.asc:after {
  width: 0;
  height: 0;
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;
  border-top: 5px solid #fff;
  content:"";
  position: relative;
  top:13px;
  right:-5px;
  }
  .sort.desc:after {
  width: 0;
  height: 0;
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;
  border-bottom: 5px solid #fff;
  }

  img {
    width: 150px;
    border: 1px solid black;
  }
  img.selected {
    border: 3px solid green;
  }
  img:hover {
    cursor: pointer;
  }
  #galleryHeader {
    display: none;
  }
  h3, h4 {
    color: green;
  }
  h4 {
    font-style:italic;
  }
  html {
    background-color: #E6E6E6;
  }

</style>
@extends('templates.default')

@section('content')

<h3>Update your profile</h3>





  <!--------------------header------------------------>

        @include('templates.edit_header')

  <!--------------------- end of header---------------------->

        <div id="wrapper">
            <div id="layout-static">


              <!----Left Bar--->


              <!----End Left Bar--->



                <div class="static-content-wrapper">
                    <div class="static-content">
                        <div class="page-content">
                          <div class="row" style = "margin:0;">
                            <div class = "col-sm-10" style = "margin-left :10%;">
                            <ol class="breadcrumb">

                              <div class="row" style = "background-color : #ffffff">
                                  <div class="col-lg-12">


                                    <div class="headerContent">
                                        <h2 class="headerTitle">Choose 5 Categories</h2>

                                            <h3 class="headerSubTitle">Then we'll build a custom Timeline for you</h3>

                                    </div>
                                    <div class="row">

                                    <form name = "select-cat" method = "POST" action = "{{  action('\Chatty\Http\Controllers\Auth\AuthController@postCategorySelect')  }}">
                                        <div class="form-group">
                                            <div class="col-sm-12 col-md-12 col-lg-12">
                                                <input type="search" class="form-control" id="search" placeholder="Add your options..">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="searchable-container" style = "  height: 200px;
                                              overflow-y: auto ; overflow-x : hidden">
                                                @foreach($catnav as $cat)
                                                <div class="items col-xs-5 col-sm-5 col-md-3 col-lg-3">
                                                    <div class="info-block block-info clearfix">
                                                        <div class="square-box pull-left">

                                                        </div>
                                                        <div data-toggle="buttons" class="btn-group bizmoduleselect">
                                                            <label class="btn btn-default">
                                                                <div class="bizcontent">
                                                                    <input type="checkbox" name="category[]" multiple = "multiple" value="{{$cat->id}}">
                                                                    <span class="glyphicon glyphicon-ok glyphicon-lg"></span>
                                                                    <h5>  {{$cat->category_name}}</h5>
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach


                                            </div>
                                        </div>
                                    </div>
                                    <input type = "submit" name = "Next" >
                                    <input type = "hidden" name ="_token" value = "{{Session::token()}}">
                                    </form>
                                    <div id="users">
                                    <div class="searchWrapper ">
                                        <em class="searchIcon"></em>
                                        <input class="Input Module search" placeholder="Search for any Category" type="text">








                                        <a class="clearSearch"><em></em></a>
                                    </div>


                                    <ul class="list" style ="
                                    height: 200px;
                                    overflow: auto"

                                    >
                                        @foreach($catnav as $cat)
                                      <li class = "col-sm-3" style="background: #fff center;
                                      background-size: cover;
                                      border-radius: 6px;
                                      display: block;
                                      height: 100%;

                                      opacity: .8;
                                      position: relative;
                                      background-size: 136px 136px;
                                     background-repeat: no-repeat;
                                      background-image: url(https://s-media-cache-ak0.pinimg.com/400x/c3/c5/64/c3c564cb6ab83a03eeb4958fe9f88445.jpg)">
                                        <div class="overflowMask hidden ">
                                            <div class="mask">
                                                <span class="text ">...</span>
                                            </div>
                                        </div>

                                        <div class="interestMaskAndWrapper">










                                                <div class="interestImage" style="background-image: url(https://s-media-cache-ak0.pinimg.com/400x/c3/c5/64/c3c564cb6ab83a03eeb4958fe9f88445.jpg)" data-element-type="211" data-aux="{ &quot;interest&quot;: &quot;diy crafts&quot; }"></div>

                                                    <div class = "name" style = "margin-left : 20%;bottom : 0px;" >
                                                      <h3 style = "color: #fff;
                                      font-size: 13px;
                                      line-height: 1.1;
                                      overflow: hidden;
                                      padding: 8px;
                                      text-overflow: ellipsis;
                                      text-shadow: 0 1px 0 rgba(0, 0, 0, 0.3);
                                      white-space: normal;">
                                                      {{$cat->category_name}}</h3>
                                                    </div>



                                        </div>
                                      </li>
                                      @endforeach

                                    </ul>

                                    </div>




                                  <div class="contentWrapper">











                                  </div></div></div>



<script src="http://listjs.com/no-cdn/list.js"></script>



                     </div> <!---- End of Timeline and Middle Content  -------->


                            <div class = "col-sm-2">

                            </div>
                          </div>
                        </div> <!-- #page-content -->
                    </div>
                    <footer role="contentinfo">
    <div class="clearfix">

        <button class="pull-right btn btn-link btn-xs hidden-print" id="back-to-top"><i class="ti ti-arrow-up"></i></button>
    </div>
</footer>

                </div>
            </div>
        </div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('js/list.js')}}"></script>

        <script>
        var options = {
valueNames: [ 'name', 'born' ]
};

var userList = new List('users', options);

$(function() {
    $('#search').on('keyup', function() {
        var pattern = $(this).val();
        $('.searchable-container .items').hide();
        $('.searchable-container .items').filter(function() {
            return $(this).text().match(new RegExp(pattern, 'i'));
        }).show();
    });
});

        </script>


@stop
