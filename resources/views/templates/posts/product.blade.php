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
                 <a href="{{ route('profile.timeline', ['username' =>  $status->user->username]) }}">{{ $status->user->getNameOrUsername() }}</a>
                 <span class="useremail">{{$count = Auth::user()->endorsedBy()->count()}} {{str_plural('Endorsement', $count)}}</span>

             </div>
         </div>


         </div>

         <div class = "col-sm-9">







           <div class="panel panel-default profile-card">
                       <div class="panel-body">


                        <div class = "row">
                                @foreach( $status->product->images as $image )
                                <a href="{{url($image->image_path)}}" data-lightbox="roadtrip" data-title="{{ $status->body }}">
                              <div class = "col-sm-4">  <img src="{{url($image->image_path)}}" style = "max-height : 100px; max-width : auto;"class="img-responsive">  </div>
                              </a>
                                    @endforeach

                            </div>

                            <br>
                            <br>


                           <div class="profile-card-icon" style = "margin-bottom:1%;">
                             	<a href="#"    >
                               <img src="{{url($status->product->base_image)}}" style = "max-height : 200px;"class="img-responsive">
                             </a>
                           </div>
                           <h4 class="text-center">  {{$status->product->cond}}</h4>
                           <ul class="profile-card-items">
                               <li><i class="fa fa-map-marker"></i> Harare, Zimbabwe</li>
                               <li><i class="fa fa-check-square"></i> 	{{ $status->body }}</li>
                               <li><i class="fa fa-money"></i> 	${{$status->product->price}}</li>
                           </ul>
                       </div>
                   </div>
                   <ul class="icon-list">
                          <?php $mymodal_id = "myModal1-{$status->product->id}"?>


                       <li><a href = "#" data-toggle="modal" data-target="#{{$mymodal_id}}"><i class="fa fa-plus-square" data-toggle="modal" data-target="#myModal" ></i> Saves</a></li>
                       <li><i class="fa fa-clock-o fa-fw"></i>  {{ $status->created_at->diffForHumans() }}</li>
                        <li><i class="fa fa-share-alt"></i>  Share</li>
                        <li><i class="fa fa-warning"></i>  Report</li>


                    <li><a href="{{ route('status.like', $status->id) }}">Like</a></li>

                       <li><i class="fa fa-thumbs-o-up"></i> {{$status->likes->count()}} {{str_plural('like',$status->likes->count() )}}</li>
                   </ul>
                  @include('templates.posts.comments')
         </div>






       </div>






     </div>
 </div>
   </div>



   <!-- Modal -->
   <div class="modal fade" id="{{$mymodal_id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
     <div class="modal-dialog custom-class">
       <div class="modal-content">
                           <div class="modal-header">
                             <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                             <h3 class="modal-title" id="lineModalLabel">Save To Collection....</h3>
                           </div>
                           <div class="modal-body">


                                   <!-- content goes here -->
                               <form role="form" method="post" action ="{{  action('\Chatty\Http\Controllers\DbModels\CollectionsController@storeToCollection')  }}">

                                 <div class="form-group">
                                 <label for="exampleInputPassword1">Collection</label>


                                   <select class="form-control" name="collection">
                                     @foreach($collection as $col)

                                       <option value="{{$col->id}}">{{$col->title}}</option>
                                       @endforeach
                                   </select>



                               </div>



                                     <div class="form-group">
                                         <input type="hidden" name="product_id" value="{{$status->product->id }}" >
                                       <label for="exampleInputPassword1">Description</label>
                                   <textarea  id="txtarea1" cols="50" name ="description" rows="4" class="form-control">{{ $status->product->product_description }}</textarea>
                                     </div>

                                     <div class="btn-group" role="group">
                                       <button type="submit" id="saveImage" class="btn btn-default btn-hover-green" data-action="save" role="button">Save</button>
                                     </div>
                                       <input type="hidden" name="_token" value="{{ Session::token() }}" >

                                   </form>

                           </div>

                         </div>
     </div>
   </div>
