@if($signedIn)
    @if( $currentUser->isFollowing($user))
        {!! Form::open(['method' => 'DELETE', 'route' => ['unfollow', $user->id]]) !!}

        {!! Form::hidden('userIdToUnfollow', $user->id) !!}
        <button type="submit" class="btn btn-danger">Unfollow {{ $user->username }}</button>

        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => 'follow']) !!}

        {!! Form::hidden('userIdToFollow', $user->id) !!}
        <button type="submit" class="btn btn-primary">Follow {{ $user->username }}</button>

        {!! Form::close() !!}
    @endif
@endif
