<div class="media">

	<a class="pull-left" href="{{ route('profile.index', ['username' => $user->username]) }}">
	 <img  class = "img-responsive" width = "200"  src="{{url($user->profilePic)}}"> 
	</a>

	<div class="media-body">
		<h4 class="media-heading"><a href="{{ route('profile.index', ['username' => $user->username]) }}">{{ $user->getNameOrUsername() }}</a></h4>

	</div>
	<p>{{ $user->location }}</p>

</div>

		@if(!Auth::user()->hasEndorsed($user))
		<a href="{{ route('endorse', ['username' => $user->username]) }}" class="btn btn-primary">Endorse</a>
		@endif
   	</div>
	<p>{{ $user->location }}</p>

</div>

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="{{ URL::asset('bower_components/bootstrap-star-rating/css/star-rating.css') }}" media="all" rel="stylesheet" type="text/css"/>
    <script src="{{ URL::asset('bower_components/bootstrap-star-rating/js/jquery-1.11.3.min.js') }}"></script>
    <script src="{{ URL::asset('bower_components/bootstrap-star-rating/js/star-rating.js') }}" type="text/javascript"></script>

    <input id="ratt" type="number" value="{{ Auth::user()->getEndorsementRating($user) }}" class="rating" min=0 max=5 step=1 data-size="xs" disabled="true"/>
