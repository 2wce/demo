<style>
 .animated {
    -webkit-transition: height 0.2s;
    -moz-transition: height 0.2s;
    transition: height 0.2s;
}

.stars
{
    margin: 20px 0;
    font-size: 24px;
    color: #d17581;
}

</style>

@extends('templates.default')

@section('content')


  <!--------------------header------------------------>

        @include('templates.header')

  <!--------------------- end of header---------------------->

        <div id="wrapper" style="margin-top: 3%;">
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

                          @include('templates.statusfrom')



              <!------ TimeLine and its components --------------------->








                                @include('timeline.partials.statuses')




                     </div> <!---- End of Timeline and Middle Content  -------->
                            <div class = "col-sm-3" style= "margin-left:-2%;font-size: 12px ">


           @include('templates.activity')


                            </div>

                            <div class = "col-sm-2">
                              <div class="sidebar1 right">

    <ul class="chat-filter nav nav-pills ">
        <li class="active"><a href="#" data-target="li">All</a>
        </li>
        <li><a href="#" data-target=".online">Online</a>
        </li>
        <li><a href="#" data-target=".offline">Offline</a>
        </li>
    </ul>
    <ul class="chat-contacts">
        <li class="online" data-user-id="1">
            <a href="#">
                <div class="media">
                    <div class="pull-left">
                        <span class="status"></span>
                        <img src="{{url(Auth::user()->profilePic)}}" width="40" class="img-circle" />
                    </div>
                    <div class="media-body">
                        <div class="contact-name">{{ Auth::user()->getNameOrUsername() }}</div>
                        <small>"Free Today"</small>
                    </div>
                </div>
            </a>
        </li>
        <li class="online away" data-user-id="2">
            <a href="#">
                <div class="media">
                    <div class="pull-left">
                        <span class="status"></span>
                        <img src="{{url(Auth::user()->profilePic)}}" width="40" class="img-circle" />
                    </div>
                    <div class="media-body">
                        <div class="contact-name">{{ Auth::user()->getNameOrUsername() }}</div>
                        <small>"Feeling Groovy"</small>
                    </div>
                </div>
            </a>
        </li>
        <li class="online" data-user-id="3">
            <a href="#">
                <div class="media">
                    <div class="pull-left">
                        <span class="status"></span>
                        <img src="{{url(Auth::user()->profilePic)}}" width="40" class="img-circle" />
                    </div>
                    <div class="media-body">
                        <div class="contact-name">{{ Auth::user()->getNameOrUsername() }}</div>
                        <small>Busy</small>
                    </div>
                </div>
            </a>
        </li>
        <li class="offline" data-user-id="4">
            <a href="#">
                <div class="media">
                    <div class="pull-left">
                        <img src="{{url(Auth::user()->profilePic)}}" width="40" class="img-circle" />
                    </div>
                    <div class="media-body">
                        <div class="contact-name">{{ Auth::user()->getNameOrUsername() }}</div>
                        <small>Offline</small>
                    </div>
                </div>
            </a>
        </li>
        <li class="offline" data-user-id="4">
            <a href="#">
                <div class="media">
                    <div class="pull-left">
                        <img src="{{url(Auth::user()->profilePic)}}" width="40" class="img-circle" />
                    </div>
                    <div class="media-body">
                        <div class="contact-name">{{ Auth::user()->getNameOrUsername() }}</div>
                        <small>Offline</small>
                    </div>
                </div>
            </a>
        </li>
        <li class="offline" data-user-id="4">
            <a href="#">
                <div class="media">
                    <div class="pull-left">
                        <img src="{{url(Auth::user()->profilePic)}}" width="40" class="img-circle" />
                    </div>
                    <div class="media-body">
                        <div class="contact-name">{{ Auth::user()->getNameOrUsername() }}</div>
                        <small>Offline</small>
                    </div>
                </div>
            </a>
        </li>
    </ul>
    <div class="chat-search">
        <input type="text" class="form-control" placeholder="Search" />
    </div>
</div>
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
