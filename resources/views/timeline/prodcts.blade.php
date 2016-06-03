
@extends('templates.default')

@section('content')


  <!--------------------header------------------------>

        @include('templates.header')
        <div class = "row" style = "color :black ;font-size : 14px;background-color:white; margin-top :1%;height:30px;float : left;width : 100%;">
          <div class="tabbable-panel">
          				<div class="tabbable-line">
          <ul class="nav nav-tabs" style= "margin-top:-2%;">
            <li class= "col-sm-1">
            </li>
            <li class="col-sm-2" style = "margin-left : 10%;">
              <a href="#tab_default_1" data-toggle="tab">
            Home </a>
            </li>
            <li class="col-sm-2">
              <a href="#tab_default_2" data-toggle="tab">
            People </a>
            </li>
            <li class ="active col-sm-2">
              <a href="{{ route('posts') }}">
              Posts </a>
            </li>
            <li class="col-sm-2">
              <a href="" >
            Products </a>
            </li>
            <li class ="col-sm-2">
              <a href="#tab_default_3" data-toggle="tab">
            Places </a>
            </li>
            <li class= "col-sm-1">
            </li>
          </ul>

        </div>
        </div>
        </div>
  <!--------------------- end of header---------------------->
  <br> <br>

        <div id="wrapper">
            <div id="layout-static">


              <!----Left Bar--->

                  @include('templates.leftbar')
              <!----End Left Bar--->



                <div class="static-content-wrapper">
                    <div class="static-content">
                        <div class="page-content">
                          <div class="row" style = "margin:0;">
                            <div class = "col-sm-7">
                            <ol class="breadcrumb">

                                <!----fILTER ------------>

                                <!-- Button trigger modal -->
                                  <br> <br>


                          @include('templates.statusfrom')



              <!------ TimeLine and its components --------------------->








                                @include('timeline.partials.statuses')




                     </div> <!---- End of Timeline and Middle Content  -------->
                            <div class = "col-sm-3" style= "margin-left:-2%;font-size: 12px ">


           @include('templates.activity')


                            </div>

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
