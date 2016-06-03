<style>
.AdaptiveFiltersBar {
    border-bottom: 1px solid #e1e8ed;
    margin: 0 auto;
    height: 50px;
}
.AdaptiveFiltersBar-nav {
    text-align:justify;
}
.AdaptiveFiltersBar-item {
    border-bottom: 0 solid #1da1f2;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    display: inline-block;
    height: 46px;
    transition: all .15s ease
}
.AdaptiveFiltersBar-item:hover,
.AdaptiveFiltersBar-item:focus,
.AdaptiveFiltersBar-item.is-selected {
    border-bottom-width: 4px;
    border-bottom-color: #1da1f2
}
.AdaptiveFiltersBar-item--more {
    vertical-align: top
}
.AdaptiveFiltersBar-target {
    color: #1da1f2;
    display: block;
    padding: 14px 0
}
.AdaptiveFiltersBar-target--link {
    text-decoration: none
}
.AdaptiveFiltersBar-target--link:hover,
.AdaptiveFiltersBar-target--link:focus {
    text-decoration: none
}
.AdaptiveFiltersBar-target--more {
    padding: 14px 24px 10px
}
.AdaptiveFiltersBar-target--more:focus {
    outline: 0
}
.AdaptiveFiltersBar-label {
    border-right: 1px solid #ccd6dd;
    padding-left: 24px;
    padding-right: 24px
}
.AdaptiveFiltersBar-moreCaretIcon {
    font-size: 8px;
    line-height: 8px
}
.AdaptiveFiltersDropdown.dropdown-menu {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    padding: 8px 0;
    margin-top: 4px;
    text-align: left
}
.AdaptiveFiltersDropdown.dropdown-menu li>.AdaptiveFiltersDropdown-target {
    color: #66757f;
    padding-left: 10px;
    padding-right: 30px
}
.AdaptiveFiltersDropdown.dropdown-menu li>.AdaptiveFiltersDropdown-target:hover,
.AdaptiveFiltersDropdown.dropdown-menu li>.AdaptiveFiltersDropdown-target:focus {
    background-color: #1da1f2;
    color: #fff
}
.AdaptiveFiltersDropdown.dropdown-menu li>.AdaptiveFiltersDropdown-target--advanced {
    color: #1da1f2;
    font-weight: bold
}
.AdaptiveFiltersDropdown-label {
    padding-left: 20px
}
.AdaptiveFiltersDropdown-label.is-selected {
    padding-left: 8px
}
.AdaptiveFiltersDropdown-checkIcon {
    color: #1da1f2
}
.AdaptiveFiltersDropdown-target:hover .AdaptiveFiltersDropdown-checkIcon {
    color: #fff
}

@import url(http://fonts.googleapis.com/css?family=Open+Sans:700);
#cssmenu {
  background: #007A96;
  width: auto;
}
#cssmenu ul {
  list-style: none;
  margin: 0;
  padding: 0;
  line-height: 1;
  display: block;
  zoom: 1;
}
#cssmenu ul:after {
  content: " ";
  display: block;
  font-size: 0;
  height: 0;
  clear: both;
  visibility: hidden;
}
#cssmenu ul li {
  display: inline-block;
  padding: 0;
  margin: 0;
}
#cssmenu.align-right ul li {
  float: right;
}
#cssmenu.align-center ul {
  text-align: center;
}
#cssmenu ul li a {
  color: #ffffff;
  text-decoration: none;
  display: block;
  padding: 15px 25px;
  font-family: 'Open Sans', sans-serif;
  font-weight: 700;
  text-transform: uppercase;
  font-size: 14px;
  position: relative;
  -webkit-transition: color .25s;
  -moz-transition: color .25s;
  -ms-transition: color .25s;
  -o-transition: color .25s;
  transition: color .25s;
}
#cssmenu ul li a:hover {
  color: #333333;
}
#cssmenu ul li a:hover:before {
  width: 100%;
}
#cssmenu ul li a:after {
  content: "";
  display: block;
  position: absolute;
  right: -3px;
  top: 19px;
  height: 6px;
  width: 6px;
  background: #ffffff;
  opacity: .5;
}
#cssmenu ul li a:before {
  content: "";
  display: block;
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 0;
  background: #333333;
  -webkit-transition: width .25s;
  -moz-transition: width .25s;
  -ms-transition: width .25s;
  -o-transition: width .25s;
  transition: width .25s;
}
#cssmenu ul li.last > a:after,
#cssmenu ul li:last-child > a:after {
  display: none;
}
#cssmenu ul li.active a {
  color: #333333;
}
#cssmenu ul li.active a:before {
  width: 100%;
}
#cssmenu.align-right li.last > a:after,
#cssmenu.align-right li:last-child > a:after {
  display: block;
}
#cssmenu.align-right li:first-child a:after {
  display: none;
}
@media screen and (max-width: 768px) {
  #cssmenu ul li {
    float: none;
    display: block;
  }
  #cssmenu ul li a {
    width: 100%;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    border-bottom: 1px solid #fb998c;
  }
  #cssmenu ul li.last > a,
  #cssmenu ul li:last-child > a {
    border: 0;
  }
  #cssmenu ul li a:after {
    display: none;
  }
  #cssmenu ul li a:before {
    display: none;
  }
}


</style>



<header id="topnav" class="navbar navbar-default navbar-fixed-top" style = "background-color:" role="banner" >

<div class="logo-area">
<span id="trigger-sidebar" class="toolbar-trigger toolbar-icon-bg">
<a data-toggle="tooltips" data-placement="right" title="Toggle Sidebar">
<!----<span class="icon-bg">
  <i class="ti ti-menu"></i>
</span>--->
</a>
</span>

<a class="navbar-brand" href="{{ route('home') }}">Plus Afrik</a>

<div class="toolbar-icon-bg hidden-xs" id="toolbar-search" style = "">
   <form action="{{ route('search.results') }}" role="search" >
    <div class="input-group">

<input type="text" name="query" class="form-control" placeholder="What are you looking for ?">
  <span class="input-group-btn"><button class="btn" type="submit"><i class="ti ti-search"></i></button></span>
<span class="input-group-btn"><button class="btn" type="button"><i class="ti ti-close"></i></button></span>
</div>
</form>
</div>

</div><!-- logo-area -->

<ul class="nav navbar-nav toolbar pull-right">

<li class="toolbar-icon-bg visible-xs-block" id="trigger-toolbar-search">
<a href="#"><span class="icon-bg"><i class="ti ti-search"></i></span></a>
</li>


@if(Auth::check())

<!---<li><a href="{{ route('profile.index', ['username' => Auth::user()->username]) }}">{{ Auth::user()->getNameOrUsername() }}
</a></li>--->
<li><a data-toggle="modal" href="#">Messages</a></li>


<li><a href="{{ route('profile.edit') }}">Update profile</a>
</li>

<li><a href="{{ route('auth.signout') }}">Sign out</a></li>
@else
<li><a href="{{ route('auth.signup') }}">Sign up</a></li>
<li><a href="{{ route('auth.signin') }}">Sign in</a></li>
@endif

@if(Auth::check())
<li class="dropdown toolbar-icon-bg">
<a href="#" class="hasnotifications dropdown-toggle" data-toggle='dropdown'><span class="icon-bg"><i class="ti ti-bell"></i></span><span class="badge badge-deeporange">2</span></a>
<div class="dropdown-menu notifications arrow">
<div class="topnav-dropdown-header">
  <span>Notifications</span>
</div>
<div class="scroll-pane">
  <ul class="media-list scroll-content">
    <li class="media notification-success">
      <a href="#">
        <div class="media-left">
          <span class="notification-icon"><i class="ti ti-check"></i></span>
        </div>
        <div class="media-body">
          <h4 class="notification-heading">Update 1.0.4 successfully pushed</h4>
          <span class="notification-time">8 mins ago</span>
        </div>
      </a>
    </li>
    <li class="media notification-info">
      <a href="#">
        <div class="media-left">
          <span class="notification-icon"><i class="ti ti-check"></i></span>
        </div>
        <div class="media-body">
          <h4 class="notification-heading">Update 1.0.3 successfully pushed</h4>
          <span class="notification-time">24 mins ago</span>
        </div>
      </a>
    </li>
    <li class="media notification-teal">
      <a href="#">
        <div class="media-left">
          <span class="notification-icon"><i class="ti ti-check"></i></span>
        </div>
        <div class="media-body">
          <h4 class="notification-heading">Update 1.0.2 successfully pushed</h4>
          <span class="notification-time">16 hours ago</span>
        </div>
      </a>
    </li>
    <li class="media notification-indigo">
      <a href="#">
        <div class="media-left">
          <span class="notification-icon"><i class="ti ti-check"></i></span>
        </div>
        <div class="media-body">
          <h4 class="notification-heading">Update 1.0.1 successfully pushed</h4>
          <span class="notification-time">2 days ago</span>
        </div>
      </a>
    </li>
    <li class="media notification-danger">
      <a href="#">
        <div class="media-left">
          <span class="notification-icon"><i class="ti ti-arrow-up"></i></span>
        </div>
        <div class="media-body">
          <h4 class="notification-heading">Initial Release 1.0</h4>
          <span class="notification-time">4 days ago</span>
        </div>
      </a>
    </li>
  </ul>
</div>
<div class="topnav-dropdown-footer">
  <a href="#">See all notifications</a>
</div>
</div>
</li>


</ul>




 @endif



</header>
