
<!-- Pass username and display name to register popup -->


@foreach (Auth::user()->friends() as $user)
<div class="sidebar-name">
<a href="javascript:register_popup('{{$user->username}}', '{{$user->username}}');">
<img width="30" height="30" src="dist/chat/img.chat/user.png" />
<span>
	
					{{$user->username}}
	

	</span>
</a>
</div>
@endforeach	