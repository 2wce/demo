
@extends('templates.default')

@section('content')


  <!--------------------header------------------------>

        @include('templates.no-filter')

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
                            <div class = "col-sm-12">
                            <ol class="breadcrumb">



                           <div class="cover profile">
                   <div class="wrapper">

                           <img src="{{url("banner.png")}}" alt="{{url("banner.png")}}" />


                   </div>
                   <div class="cover-info">


                     <ul class="cover-nav">
                         <li ><a href="{{ route('profile.index.timeline', ['username' => $user->username]) }}"><i class="fa fa-newspaper-o"></i> Timeline</a>
                         </li>
                         <li class="active"><a href="{{ route('profile.index.products', ['username' => $user->username]) }}"><i class="fa fa-tablet"></i>Products</a>
                         </li>
                         <li><a href="#"><i class="fa fa-tty"></i> Service Portofilo</a>
                         </li>
                         <li ><a href="{{ route('profile.index.network', ['username' => $user->username]) }}"><i class="fa fa-fw fa-users"></i> Network</a>
                         </li>
                         <li><a href="user-public-users.html"><i class="fa fa-spinner"></i> Radar</a>
                         </li>
                         <li><a href="{{ route('profile.index.collections', ['username' => $user->username]) }}"><i class="fa fa-server"></i> Collections</a>
                         </li>

                         <li><a href="user-public-users.html"><i class="fa fa-tachometer"></i> Stats</a>
                         </li>

                     </ul>
                   </div>
               </div>

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
          </div><!-- /main -->













                     </div> <!---- End of Timeline and Middle Content  -------->


               
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
