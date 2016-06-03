
<!doctype html>
<html>
	<head>
		<title>digital chat</title>
		
	 

		<link href="{{ asset('dist/chat/css.chat/chat.css') }}" rel="stylesheet" />
        <link href="{{ asset('dist/chat/css.chat/bootstrap.css') }}" rel="stylesheet" />
        <link href="{{ asset('dist/chat/css.chat/bootstrap.min.css') }}" rel="stylesheet" />
        <script src="{{ asset('dist/chat/js.chat/jquery.min.js') }}" ></script> 
		<script src="{{ asset('dist/chat/js.chat/chat.js') }}" ></script>
        <script src="{{ asset('dist/chat/js.chat/strophe.js') }}"></script>
		<script src="{{ asset('dist/chat/js.chat/xmpp.js') }}"></script>
	</head>
	<body>
	
<div class="chat-sidebar">



		@foreach (Auth::user()->friends() as $user)
					@include('user.partials.freind')
		@endforeach			





	</div><!--chat-sidebar-->

	</body>
</html>

