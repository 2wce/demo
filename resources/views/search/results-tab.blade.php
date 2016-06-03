<style>
  .container { margin-top: 20px; }
  .mb20 { margin-bottom: 20px; }

  hgroup { padding-left: 15px; border-bottom: 1px solid #ccc; }
  hgroup h1 { font: 500 normal 1.625em "Roboto",Arial,Verdana,sans-serif; color: #2a3644; margin-top: 0; line-height: 1.15; }
  hgroup h2.lead { font: normal normal 1.125em "Roboto",Arial,Verdana,sans-serif; color: #2a3644; margin: 0; padding-bottom: 10px; }
  .snip1344 {
    font-family: 'Open Sans', Arial, sans-serif;
    position: relative;
    float: left;
    overflow: hidden;
    margin: 10px 1%;
    min-width: 230px;
    max-width: 315px;
    width: 100%;
    color: #ffffff;
    text-align: center;
    line-height: 1.4em;
    background-color: #141414;
  }
  .snip1344 * {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    -webkit-transition: all 0.25s ease;
    transition: all 0.25s ease;
  }
  .snip1344 .background {
    width: 100%;
    vertical-align: top;
    opacity: 0.2;
    -webkit-filter: grayscale(100%) blur(10px);
    filter: grayscale(100%) blur(10px);
    -webkit-transition: all 2s ease;
    transition: all 2s ease;
  }
  .snip1344 figcaption {
    width: 100%;
    padding: 15px 25px;
    position: absolute;
    left: 0;
    top: 50%;
  }
  .snip1344 .profile {
    border-radius: 50%;
    position: absolute;
    bottom: 50%;
    left: 50%;
    max-width: 100px;
    opacity: 1;
    box-shadow: 3px 3px 20px rgba(0, 0, 0, 0.5);
    border: 2px solid rgba(255, 255, 255, 0.5);
    -webkit-transform: translate(-50%, 0%);
    transform: translate(-50%, 0%);
  }
  .snip1344 h3 {
    margin: 0 0 5px;
    font-weight: 400;
  }
  .snip1344 h3 span {
    display: block;
    font-size: 0.6em;
    color: #f39c12;
    opacity: 0.75;
  }
  .snip1344 i {
    padding: 10px 5px;
    display: inline-block;
    font-size: 32px;
    color: #ffffff;
    text-align: center;
    opacity: 0.65;
  }
  .snip1344 a {
    text-decoration: none;
  }
  .snip1344 i:hover {
    opacity: 1;
    -webkit-transition: all 0.35s ease;
    transition: all 0.35s ease;
  }
  .snip1344:hover .background,
  .snip1344.hover .background {
    -webkit-transform: scale(1.3);
    transform: scale(1.3);
  }
  /* Demo purposes only */
  body {
    background-color: #FFFFFF;
  }

  .search-result .thumbnail { border-radius: 0 !important; }
  .search-result:first-child { margin-top: 0 !important; }
  .search-result { margin-top: 20px; }
  .search-result .col-md-2 { border-right: 1px dotted #ccc; min-height: 140px; }
  .search-result ul { padding-left: 0 !important; list-style: none;  }
  .search-result ul li { font: 400 normal .85em "Roboto",Arial,Verdana,sans-serif;  line-height: 30px; }
  .search-result ul li i { padding-right: 5px; }
  .search-result .col-md-7 { position: relative; }
  .search-result h3 { font: 500 normal 1.375em "Roboto",Arial,Verdana,sans-serif; margin-top: 0 !important; margin-bottom: 10px !important; }
  .search-result h3 > a, .search-result i { color: #248dc1 !important; }
  .search-result p { font: normal normal 1.125em "Roboto",Arial,Verdana,sans-serif; }
  .search-result span.plus { position: absolute; right: 0; top: 126px; }
  .search-result span.plus a { background-color: #248dc1; padding: 5px 5px 3px 5px; }
  .search-result span.plus a:hover { background-color: #414141; }
  .search-result span.plus a i { color: #fff !important; }
  .search-result span.border { display: block; width: 97%; margin: 0 15px; border-bottom: 1px dotted #ccc; }
</style>

<div class="tabs" style="max-width:800px;margin-left : 0%;margin-top :5%;">
  <input type="radio" name="tabs" id="tab1" checked >
    <label for="tab1">
      <i class="fa fa-quote-left"></i><span>Showing Post  </span>
    </label>

  <input type="radio" name="tabs" id="tab2">
    <label for="tab2">
      <i class="fa fa-desktop"></i><span>Showing People</span>
    </label>

  <input type="radio" name="tabs" id="tab3">
    <label for="tab3">
      <i class="fa fa-wrench"></i><span>Showing Products </span>
    </label>

  <div id="tab-content1" class="tab-content">
    <h3>Your search for "{{ Request::input('query') }}"</h3>
      <hgroup class="mb20">
        <h1>Search Results</h1>
          <h2 class="lead"><strong class="text-danger">{{$totalUsers}}</strong> results were found for the search for <strong class="text-danger">{{ Request::input('query') }}</strong></h2>
      </hgroup>

    @if (!$users->count())
      <p>No results found.</p>
    @else
    <div class = "row">
    	@foreach ($users as $user)
        <div class="col-md-4" style = "padding-right:2%">
          <div class="row profile">
            <div class="profile-sidebar">
              <div class="profile-userpic">
                <img src="{{url($user->profilePic)}}" alt="people" style ="width: 150px; max-height:150px;" class="img-responsive">
              </div>

              <div class="profile-usertitle">
                <div class="profile-usertitle-name">
                  <a href="{{ route('profile.timeline', ['username' =>  $user->username]) }}">
                    {{$user->getFirstnameorUsername()}}
                  </a>
                </div>

                <div class="profile-usertitle-job">
                  Developer
                </div>
              </div>

              <div class="profile-userbuttons">

                @if($user->isFollowedBy(Auth::user()))
                <!-- Small modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Small modal</button>
                <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                  <div class="modal-dialog modal-sm">
                    <div class="modal-content">
		                         <div class="span4 well" style="padding-bottom:0">
                               <form accept-charset="UTF-8" action="{{ route('storeMessage')}}" method="POST">
                                 <textarea class="span4" id="message" name="message"
                                 placeholder="Type in your message" rows="5"></textarea>
                                 <button class="btn btn-info" type="submit">Post New Message</button>
                                 <input type="hidden" name="recipients[]" value="{{ $user->id }}" >
                                 <input type="hidden" name="_token" value="{{ Session::token() }}" >
                               </form>
                          </div>
                    </div>
                  </div>
                </div>
                  <form role="form" method="get" action ="{{  action('\Chatty\Http\Controllers\Chat\MessagesController@index')  }}">
                    <button type="submit" class="btn btn-success btn-sm">Message</button>


                  </form>

                  @if(!Auth::user()->hasEndorsed($user))
                  <form role="form" method="post" action ="{{  route('endorse')  }}">
                    <button type="submit" class="btn btn-success btn-sm">Endorse</button>
                    <input type="hidden" name="_token" value="{{ Session::token() }}" >
                    <input type="hidden" name="userId" value="{{ $user->id }}" >
                  </form>
                  @endif

                @else
                  <form role="form" method="get" action ="{{  action('\Chatty\Http\Controllers\Relationships\FollowsController@store')  }}">
                    <button type="submit" class="btn btn-success btn-sm">Follow {{$user->username}}</button>
                    <input type="hidden" name="_token" value="{{ Session::token() }}" >
                    <input type="hidden" name="userIdToFollow" value="{{ $user->id }}" >
                  </form>

                  <form role="form" method="get" action ="{{  action('\Chatty\Http\Controllers\Chat\MessagesController@index')  }}">
                    <button type="submit" class="btn btn-success btn-sm">Message</button>
                    <input type="hidden" name="_token" value="{{ Session::token() }}" >
                    <input type="hidden" name="userIdToFollow" value="{{ $user->id }}" >
                  </form>

                @endif

              </div>
            </div>
          </div>
        </div>
      @endforeach
      </div>
    @endif
  </div> <!-- #tab-content1 -->

	<div id="tab-content2" class="tab-content">
    <h3>Your search for "{{ Request::input('query') }}"</h3>
      <hgroup class="mb20">
        <h1>Search Results</h1>
          <h2 class="lead"><strong class="text-danger">{{$totalServices}}</strong> results were found for the search for <strong class="text-danger">{{ Request::input('query') }}</strong></h2>
      </hgroup>

      <section class="col-xs-12 col-sm-6 col-md-12">
      @foreach ($services as $service)
        <div class="boxed">
         <a href="{{ route('services.show', $service->id) }}"  class="h4 margin-none">{{ $service->name }}</a>
          <div class="rating text-left">
            <span class="star"></span>
            <span class="star filled"></span>
            <span class="star filled"></span>
            <span class="star filled"></span>
            <span class="star filled"></span>
          </div>

          <div class="media">
            <a href="{{ route('services.show', $service->id) }}"  class="media-object pull-left">
              <img src="{{url($service->base_image)}}" alt="" width="100" />
            </a>

            <div class="media-body">
              <p>	{{$service->description}}</p>
            </div>
          </div>

          <ul class="icon-list">
            <li><i class="fa fa-cc-mastercard"></i> ${{$service->charge}}</li>
            <li><i class="fa fa-clock-o fa-fw"></i>  {{ $service->created_at->diffForHumans() }}</li>
          </ul>
        </div>
      @endforeach
      </section>
    </div> <!-- #tab-content2 -->

	   <div id="tab-content3" class="tab-content">
       <hgroup class="mb20">
         <h1>Search Results</h1>
          <h2 class="lead"><strong class="text-danger">{{$totalProducts}}</strong> results were found for the search for <strong class="text-danger">{{Request::input('query')}}</strong></h2>
      </hgroup>

      <div class="main">
        <div id="cbp-vm" class="cbp-vm-switcher cbp-vm-view-grid">
          <div class="cbp-vm-options">
            <a href="#" class="cbp-vm-icon cbp-vm-grid cbp-vm-selected" data-view="cbp-vm-view-grid">Grid View</a>
            <a href="#" class="cbp-vm-icon cbp-vm-list" data-view="cbp-vm-view-list">List View</a>
          </div>

          <ul>
            @foreach($products as $product)
            <li>
              <a class="cbp-vm-image" href="#"><img src="{{url($product->base_image)}}"></a>
              <h3 class="cbp-vm-title">{{ $product->product_name }}</h3>
              <div class="cbp-vm-price">${{ $product->price }}</div>
              <div class="cbp-vm-details">
                {{ $product->product_description }}
              </div>
            </li>
            @endforeach
          </ul>
        </div>
      </div>
	   </div>
  </div> <!-- .tabs -->
