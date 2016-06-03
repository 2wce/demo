
<li class="comment-form">
  <form role="form" action="{{ route('status.reply', $status->id) }}" method="post">
    <div class="input-group">
        <input type="text" name="reply-{{ $status->id }}" class="form-control" /@if ($errors->has('reply-'.$status->id))
          <span class="help-block">{{ $errors->first('reply-'.$status->id) }}</span>
        @endif>
        <span class="input-group-addon">
<i>  <input type="submit" value="Reply" class=" class="fa fa-send""></i>
</span>
    </div>
      <input type="hidden" name="_token" value="{{ Session::token() }}">
  </form>
</li>
