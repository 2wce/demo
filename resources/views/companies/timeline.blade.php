@extends('templates.default-no-filter')
  @section('content')
    @include('templates.no-filter')
      <div id="wrapper">
        <div id="layout-static">
          @include('templates.leftbar')
            <div class="static-content-wrapper">
              <div class="static-content">
                <div class="page-content">
                  <div class="row" style = "margin:0;">
                    <div class = "col-sm-10">
                      <ol class="breadcrumb">
                       <div class="cover profile">
                         <div class="wrapper">
                           <img style = "width :"src="{{url("banner.png")}}" alt="{{url("banner.png")}}" />
                         </div>

                         <div class="cover-info">
                           <ul class="cover-nav">
                             <li class="active" >
                               <a href="{{ route('profile.timeline', ['username' => $user->username]) }}"><i class="fa fa-newspaper-o"></i> Timeline</a>
                             </li>
                             <li>
                               <a href="{{ route('profile.products', ['username' => $user->username]) }}"><i class="fa fa-tablet"></i>My Products</a>
                             </li>
                             <li>
                               <a href="#"><i class="fa fa-tty"></i> My Ad Campaigns</a>
                             </li>
                             <li>
                               <a href="{{ route('profile.network', ['username' => $user->username]) }}"><i class="fa fa-fw fa-users"></i> Network</a>
                             </li>
                             <li>
                               <a href="{{route('getFeed', 'user' => Auth::user())}}"><i class="fa fa-spinner"></i>My Feed</a>
                             </li>
                             <li>
                               <a href="{{ route('profile.collections', ['username' => $user->username]) }}"><i class="fa fa-server"></i> Collections</a>
                             </li>
                             <li>
                               <a href="user-public-users.html"><i class="fa fa-tachometer"></i> Stats</a>
                             </li>
                           </ul>
                         </div>
                       </div>

                       <div class = "row">
                         <div class = "col-sm-10">
                           @include('templates.statusfrom')
                         </div>
                       </div>

                       <div class = "row">
                         <div class = "col-sm-10">
                           @include('timeline.partials.statuses')
                         </div>
                       </div>
                     </div> <!---- End of Timeline and Middle Content  -------->
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
