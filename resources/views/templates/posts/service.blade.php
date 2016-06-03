<div class="timeline-block">
    <div class = "row">

<div class="panel panel-default">
   <!------------------------------------Post With Product Image------------------------------------------------->
<div class = "row">


 <div class = "col-sm-3">


   <div class="media">
     <a href="" class="pull-left">

         <img src="{{url($status->user->profilePic)}}" class="img-responsive img-circle">

     </a>
     <div class="media-body">
         <a href="#" class="pull-right text-muted"><i class="icon-reply-all-fill fa fa-2x "></i></a>
         <a href="{{ route('profile.index', ['username' => $status->user->username]) }}">{{ $status->user->getNameOrUsername() }}</a>
         <span>on 15th January, 2014</span>
         <span class="useremail">{{$count = Auth::user()->endorsedBy()->count()}} {{str_plural('Endorsement', $count)}}</span>

     </div>
   </div>


 </div>

 <div class = "col-sm-9">

   <div class="boxed">
              <a href="{{ route('services.show', $status->service->id) }}"  class="h4 margin-none">{{ $status->body }}</a>
               <div class="rating text-left">
                   <span class="star"></span>
                   <span class="star filled"></span>
                   <span class="star filled"></span>
                   <span class="star filled"></span>
                   <span class="star filled"></span>
               </div>
               <div class="media">




                   <a href="{{ route('services.show', $status->service->id) }}"  class="media-object pull-left">
                       <img src="{{url($status->service->base_image)}}" alt="" width="100" />
                   </a>
                   <div class="media-body">
                       <p>	{{$status->service->description}}</p>
                   </div>
               </div>

               <ul class="icon-list">
                   <li><i class="fa fa-cc-mastercard"></i> ${{$status->service->charge}}</li>
                   <li><i class="fa fa-clock-o fa-fw"></i>  {{ $status->created_at->diffForHumans() }}</li>

                <li><a href="{{ route('status.like', $status->id) }}">Like</a></li>

                   <li><i class="fa fa-thumbs-o-up"></i> {{$status->likes->count()}} {{str_plural('like',$status->likes->count() )}}</li>
               </ul>
           </div>

             @include('templates.posts.comments')
 </div>





</div>



</div>
</div>
</div>
