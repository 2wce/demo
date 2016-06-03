<div class="timeline-block">
    <div class = "row">

<div class="panel panel-default">
   <!------------------------------------Post With Single Image------------------------------------------------->
<div class = "row">


 <div class = "col-sm-3">


   <div class="media">
     <a href="" class="pull-left">
        <img  class = "img-responsive" width = "80" style = ""  src="{{url($status->user->profilePic)}}">
     </a>
     <div class="media-body">
         <a href="#" class="pull-right text-muted"><i class="icon-reply-all-fill fa fa-2x "></i></a>
        <a class="pull-left" href="{{ route('profile.index', ['username' => $status->user->username]) }}">
         <span>on 15th January, 2014</span>
     </div>
 </div>


 </div>

 <div class = "col-sm-9">

        <img src="{{url($status->post_image)}}"" style ="width : 100%;"class="img-responsive">

          <div class="view-all-comments"><a href="#"><i class="fa fa-comments-o"></i> View all</a> 10 comments</div>
          <ul class="comments">
              <li>
                  <div class="media">
                      <a href="" class="pull-left">
                          <img src="images/people/50/guy-5.jpg" class="media-object">
                      </a>
                      <div class="media-body">
                          <a href="" class="comment-author">Bill D.</a>
                          <span>Hi Mary, Nice Party</span>
                          <div class="comment-date">21st September</div>
                      </div>
                  </div>
              </li>
              <li>
                  <div class="media">
                      <a href="" class="pull-left">
                          <img src="images/people/50/woman-5.jpg" class="media-object">
                      </a>
                      <div class="media-body">
                          <a href="" class="comment-author">Mary</a>
                          <span>Thanks Bill</span>
                          <div class="comment-date">2 days</div>
                      </div>
                  </div>
              </li>
              <li>
                  <div class="media">
                      <a href="" class="pull-left">
                          <img src="images/people/50/guy-5.jpg" class="media-object">
                      </a>
                      <div class="media-body">
                          <a href="" class="comment-author">Bill D.</a>
                          <span>What time did it finish?</span>
                          <div class="comment-date">14 min</div>
                      </div>
                  </div>
              </li>
              <li class="comment-form">
                  <div class="input-group">
                      <input type="text" class="form-control" />
                      <span class="input-group-addon">
     <a href=""><i class="fa fa-photo"></i></a>
  </span>
                  </div>
              </li>
          </ul>
 </div>






</div>






</div>
</div>
</div>              <!-------- One Post------>
