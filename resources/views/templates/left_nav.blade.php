<div class="static-sidebar">
    <div class="sidebar">
<div class="widget" style = "width : 200px;">
<div class="widget-body">
<div class="userinfo">
<div class="avatar">
 <img  class = "img-responsive" width = "80" height = "80" style = ""  src="{{url(Auth::user()->profilePic)}}">
</div>
<div class="info">
<a ref="{{ route('profile.index.timeline', ['username' => Auth::user->username]) }}"><span class="username">{{ Auth::user()->getNameOrUsername() }}</span>
<span class="useremail">{{Auth::user()->location}}</span></a>
</div>
</div>
</div>
</div>
<div class="widget stay-on-collapse" id="widget-sidebar">
<nav role="navigation" class="widget-body">
<ul class="acc-menu">
<li class="nav-separator"><span>Categories</span></li>
<ul>
@foreach($catnav as $cat)


<li> <a href = "{{ route('categories.show', ['id' => $cat->id]) }}">{{$cat->category_name}} </a>  </li>


@endforeach
</ul>
<li class="nav-separator"><span>Services</span></li>
<ul>
@foreach($typenav as $type)


<li> <a href = "{{ route('types.show', ['id' => $type->id]) }}">{{$type->name}} </a>  </li>


@endforeach
</ul>
<li><a href="angular/app/"><i class="ti ti-shield"></i><span>Groups</span></span></a></li>
<li><a href="javascript:;"><i class="ti ti-layout"></i><span>Advertising</span></a>
<ul class="acc-menu">
<li><a href="layout-grids.html"></a></li>
<li><a href="layout-static-leftbar.html">Static Sidebar</a></li>
<li><a href="layout-sidebar-scroll.html">Scroll Sidebar</a></li>
<li><a href="layout-horizontal.html">Horizontal Nav</a></li>
<li><a href="layout-boxed.html">Boxed</a></li>
</ul>
</li>
<li><a href="javascript:;"><i class="ti ti-view-list-alt"></i><span>Followers</span></a>

</li>


<li>
<a href="javascript:;"><i class="ti ti-settings"></i><span>Settings</span></a>

</li>
<li><a href="javascript:;"><i class="ti ti-stats-up"></i><span>Analytics</span></a>

</li>
<li><a href="javascript:;"><i class="ti ti-map-alt"></i><span>Companies</span></a>

</li>
<li><a href="javascript:;"><i class="ti ti-file"></i><span>Pages</span></a>
<ul class="acc-menu">
<li><a href="extras-profile.html">Profile</a></li>
<li><a href="extras-invoice.html">Invoice</a></li>
<li><a href="javascript:;">Email Templates</a>
<ul class="acc-menu">
<li><a href="responsive-email/basic.html">Basic</a></li>
<li><a href="responsive-email/hero.html">Hero</a></li>
<li><a href="responsive-email/sidebar.html">Sidebar</a></li>
<li><a href="responsive-email/sidebar-hero.html">Sidebar Hero</a></li>
</ul>
</li>
<li><a href="coming-soon.html">Coming Soon</a></li>
<li><a href="extras-faq.html">FAQ</a></li>
<li><a href="extras-registration.html">Registration</a></li>
<li><a href="extras-forgotpassword.html">Password Reset</a></li>
<li><a href="extras-login.html">Login</a></li>
<li><a href="extras-404.html">404 Page</a></li>
<li><a href="extras-500.html">500 Page</a></li>
</ul>
</li>


</ul>
</nav>
</div>


</div>
</div>
