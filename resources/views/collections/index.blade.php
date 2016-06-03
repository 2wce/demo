
@extends('templates.default')

@section('content')


  <!--------------------header------------------------>

        @include('templates.header')

  <!--------------------- end of header---------------------->

        <div id="wrapper">
            <div id="layout-static">


              <!----Left Bar--->

                  @include('templates.leftbar')
              <!----End Left Bar--->



                <div class="static-content-wrapper">
                    <div class="static-content">
                        <div class="page-content">
                          <div class="row" style = "margin:0;">
                            <div class = "col-sm-10">
                            <ol class="breadcrumb">



                           <div class="cover profile">
                   <div class="wrapper">

                             <img src="{{url("banner.png")}}" alt="{{url("banner.png")}}" />


                   </div>
                   <div class="cover-info">


                     <ul class="cover-nav">
                         <li ><a href="{{ route('profile.index', ['username' => Auth::user()->username]) }}"><i class="fa fa-newspaper-o"></i> Timeline</a>
                         </li>
                         <li ><a href="{{ route('products.index') }}"><i class="fa fa-tablet"></i>Products</a>
                         </li>
                         <li><a href="user-public-profile.html"><i class="fa fa-tty"></i> Service Portofilo</a>
                         </li>
                         <li  ><a href="profile-network.html"><i class="fa fa-fw fa-users"></i> Network</a>
                         </li>
                         <li><a href="user-public-users.html"><i class="fa fa-spinner"></i> Radar</a>
                         </li>
                         <li class="active"><a href="{{ route('collections.index') }}"><i class="fa fa-server"></i> Collections</a>
                         </li>

                         <li><a href="user-public-users.html"><i class="fa fa-tachometer"></i> Stats</a>
                         </li>

                     </ul>
                   </div>
               </div>


               <div class="main">
                   <div class="center"><button data-toggle="modal" data-target="#squarespaceModal" class="btn btn-primary center-block">Add New Collection</button></div>
          <div id="cbp-vm" class="cbp-vm-switcher cbp-vm-view-grid">
          <div class="cbp-vm-options">
           <a href="#" class="cbp-vm-icon cbp-vm-grid cbp-vm-selected" data-view="cbp-vm-view-grid">Grid View</a>
           <a href="#" class="cbp-vm-icon cbp-vm-list" data-view="cbp-vm-view-list">List View</a>
          </div>
          <div class="row">


                @foreach($collections as $collection)
                  <div class="col-lg-5" style = "border: 1px solid #CDCDCD;  margin:4%;min-height : 300px;">
                        <?php $modal_id = "modal-{$collection->id}"?>
                            <input data-toggle="modal" data-target="#{{$modal_id}}" class="btn btn-primary center-block" type="button" value="Share Collection" />

<!-------- This is a modal for Sharing a Collection as Post ----------------->



<div class="modal fade" id="{{$modal_id}}" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
    <h3 class="modal-title" id="lineModalLabel">You are sharing your : {{$collection->title}} Collection</h3>
  </div>
  <div class="modal-body">


          <!-- content goes here -->
      <form role="form" method="post" action ="{{  action('\Chatty\Http\DbModels\CollectionsController@shareCollection')  }}">





            <div class="form-group">

              <label for="exampleInputPassword1">Description</label>
          <textarea  id="txtarea1" cols="50" name ="description" rows="4" class="form-control">{{$collection->description}}</textarea>
            </div>
                <input type = "hidden" name = "collection_id" value ="{{$collection->id}}"/>
            <div class="btn-group" role="group">
              <button type="submit" id="saveImage" class="btn btn-default btn-hover-green" data-action="save" role="button">Share</button>
            </div>
              <input type="hidden" name="_token" value="{{ Session::token() }}" >

          </form>

  </div>

</div>
</div>
</div>




<!-------- Thuis a modal for Sharing a Collection as Post ----------------->




                      <a href="{{ route('collections.show', $collection->id) }}" >



                        <h5>{{ $collection->title }}</h5>
                         <p>{{ $collection->description}}</p>
                            <div class ="row">
                                @foreach($collection->products as $product)
                                  <div class = "col-sm-5" style = "border: 1px solid #CDCDCD;  margin:4%;min-height : 100px;">
                                     <img  class = "img-responsive" style = ""  src="{{url($product->base_image)}}">
                                  </div>
                                  @endforeach
                            </div>


                        </div>

                        </a>


                    @endforeach






                      </div>
<!-- line modal -->  <div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
        <h3 class="modal-title" id="lineModalLabel">Add New Collection</h3>
      </div>
      <div class="modal-body">

              <!-- content goes here -->
          <form role="form" method="post" action ="{{ route('collections.store') }}">
                <div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <input type="text" class="form-control" name = "title"id="exampleInputEmail1" placeholder="Enter Title">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Description</label>
              <textarea  id="txtarea1" cols="50" name ="description" rows="4" class="form-control"></textarea>
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
          </div>
          </div><!--










                     </div> <!---- End of Timeline and Middle Content  -------->


                            <div class = "col-sm-2">
                              <div class="sidebar1 right">

    <ul class="chat-filter nav nav-pills ">
        <li class="active"><a href="#" data-target="li">All</a>
        </li>
        <li><a href="#" data-target=".online">Online</a>
        </li>
        <li><a href="#" data-target=".offline">Offline</a>
        </li>
    </ul>
    <ul class="chat-contacts">
        <li class="online" data-user-id="1">
            <a href="#">
                <div class="media">
                    <div class="pull-left">
                        <span class="status"></span>
                        <img src="{{url(Auth::user()->profilePic)}}" width="40" class="img-circle" />
                    </div>
                    <div class="media-body">
                        <div class="contact-name">{{ Auth::user()->getNameOrUsername() }}</div>
                        <small>"Free Today"</small>
                    </div>
                </div>
            </a>
        </li>
        <li class="online away" data-user-id="2">
            <a href="#">
                <div class="media">
                    <div class="pull-left">
                        <span class="status"></span>
                        <img src="{{url(Auth::user()->profilePic)}}" width="40" class="img-circle" />
                    </div>
                    <div class="media-body">
                        <div class="contact-name">{{ Auth::user()->getNameOrUsername() }}</div>
                        <small>"Feeling Groovy"</small>
                    </div>
                </div>
            </a>
        </li>
        <li class="online" data-user-id="3">
            <a href="#">
                <div class="media">
                    <div class="pull-left">
                        <span class="status"></span>
                        <img src="{{url(Auth::user()->profilePic)}}" width="40" class="img-circle" />
                    </div>
                    <div class="media-body">
                        <div class="contact-name">{{ Auth::user()->getNameOrUsername() }}</div>
                        <small>Busy</small>
                    </div>
                </div>
            </a>
        </li>
        <li class="offline" data-user-id="4">
            <a href="#">
                <div class="media">
                    <div class="pull-left">
                        <img src="{{url(Auth::user()->profilePic)}}" width="40" class="img-circle" />
                    </div>
                    <div class="media-body">
                        <div class="contact-name">{{ Auth::user()->getNameOrUsername() }}</div>
                        <small>Offline</small>
                    </div>
                </div>
            </a>
        </li>
        <li class="offline" data-user-id="4">
            <a href="#">
                <div class="media">
                    <div class="pull-left">
                        <img src="{{url(Auth::user()->profilePic)}}" width="40" class="img-circle" />
                    </div>
                    <div class="media-body">
                        <div class="contact-name">{{ Auth::user()->getNameOrUsername() }}</div>
                        <small>Offline</small>
                    </div>
                </div>
            </a>
        </li>
        <li class="offline" data-user-id="4">
            <a href="#">
                <div class="media">
                    <div class="pull-left">
                        <img src="{{url(Auth::user()->profilePic)}}" width="40" class="img-circle" />
                    </div>
                    <div class="media-body">
                        <div class="contact-name">{{ Auth::user()->getNameOrUsername() }}</div>
                        <small>Offline</small>
                    </div>
                </div>
            </a>
        </li>
    </ul>
    <div class="chat-search">
        <input type="text" class="form-control" placeholder="Search" />
    </div>
</div>
                            </div>
                          </div>
                        </div> <!-- #page-content -->
                    </div>
                    <footer role="contentinfo">
    <div class="clearfix">

        <button class="pull-right btn btn-link btn-xs hidden-print" id="back-to-top"><i class="ti ti-arrow-up"></i></button>
    </div>
</footer>

                </div>
            </div>
        </div>
