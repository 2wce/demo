<style>
.fixed {
    position: fixed;
}

::-webkit-scrollbar-track
{
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
    background-color: #F5F5F5;
}

::-webkit-scrollbar
{
    width: 8px;
    background-color: #F5F5F5;
}

::-webkit-scrollbar-thumb
{
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
    background-color: #555;
}


</style>


<div class="static-sidebar-wrapper sidebar-default">
    <div class="static-sidebar">
        <div class="sidebar">
  <div class ="fixed">
<div class="widget" style = "postion : relative">
<div class="widget-body">
<div class="userinfo">
<div class="avatar">
    <img src="{{url(Auth::user()->profilePic)}}" class="img-responsive img-circle">
</div>
<div class="info">
<a href="{{ route('profile.index.timeline', ['username' => Auth::user()->username]) }}"><span class="username">{{ Auth::user()->getNameOrUsername() }}</span><br>
<span class="useremail">{{Auth::user()->location}}</span></a><br>
<span class="useremail">{{$count = Auth::user()->endorsedBy()->count()}} {{str_plural('Endorsement', $count)}}</span>
</div>
</div>
</div>
</div>



<div class="widget stay-on-collapse" id="widget-sidebar">
<nav role="navigation" class="widget-body" style="height : 400px;overflow-y:auto">
<ul class="acc-menu">


@foreach($catnav as $cat)
<li> <a href = "{{ route('timeline.show', ['id' => $cat->id]) }}">{{$cat->category_name}} </a>  </li>
@endforeach

<li class="nav-separator"><span>Extras</span></li>
<li><a href="app-inbox.html"><i class="ti ti-email"></i><span>Inbox</span><span class="badge badge-danger">3</span></a></li>
<li><a href="extras-calendar.html"><i class="ti ti-calendar	"></i><span>Calendar</span><span class="badge badge-orange">1</span></a></li>
</ul>
</nav>
</div>






</div>
</div>
    </div>
</div>
