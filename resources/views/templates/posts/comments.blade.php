<div class="view-all-comments"><a href="#"><i class="fa fa-comments-o"></i> View all</a> 10 comments</div>
<ul class="comments">
   @foreach ( $status->replies as $reply )
    <li>
        <div class="media">
            <a href="{{ route('profile.index', ['username' => $reply->user->username]) }}" class="pull-left">
                <img src="{{url($reply->user->profilePic)}}" width="50" class="media-object">
            </a>
            <div class="media-body">
                <a class="comment-author" href="{{ route('profile.index', ['username' => $reply->user->username]) }}">{{ $reply->user->getNameOrUsername() }}</a>
                <span>{{ $reply->body }}</span>
                <div class="comment-date">{{ $reply->created_at->diffForHumans() }}</div>
                <ul class="list-inline">
                    <li  style="margin-left:2%;"> </li>
                    @if ( $reply->user_id !== Auth::user()->id )
                      <li><a href="{{ route('status.like', $reply->id) }}">Like</a></li>
                    @endif
                    <li>{{$reply->likes->count()}} {{str_plural('like',$reply->likes->count() )}}</li>
                </ul>
            </div>
        </div>
    </li>


     @endforeach
</ul>
@if ( ! isset($authUserIsFriend)  ||  Auth::user()->id===$status->user_id  ||  $authUserIsFriend  )
    @include('templates.posts.reply')
@endif
