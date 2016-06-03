<style>
            /****** Rating Starts *****/
            @import url(http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

            fieldset, label { margin: 0; padding: 0; }
            body{ margin: 20px; }
            h1 { font-size: 1.5em; margin: 10px; }

            .rating {
                border: none;
                float: left;
            }

            .rating > input { display: none; }
            .rating > label:before {
                margin: 5px;
                font-size: 1.25em;
                font-family: FontAwesome;
                display: inline-block;
                content: "\f005";
            }

            .rating > .half:before {
                content: "\f089";
                position: absolute;
            }

            .rating > label {
                color: #ddd;
                float: right;
            }

            .rating > input:checked ~ label,
            .rating:not(:checked) > label:hover,
            .rating:not(:checked) > label:hover ~ label { color: #FFD700;  }

            .rating > input:checked + label:hover,
            .rating > input:checked ~ label:hover,
            .rating > label:hover ~ input:checked ~ label,
            .rating > input:checked ~ label:hover ~ label { color: #FFED85;  }


            /* Downloaded from http://devzone.co.in/ */

/*********************************************
    			Call Bootstrap
*********************************************/



/*********************************************
        		Theme Elements
*********************************************/

.gold{
	color: #FFBF00;
}


/*********************************************
					PRODUCTS
*********************************************/

.product{
	border: 1px solid #dddddd;
	height: 321px;
}

.product>img{
	max-width: 230px;
}

.product-rating{
	font-size: 20px;
	margin-bottom: 25px;
}

.product-title{
	font-size: 20px;
}

.product-desc{
	font-size: 14px;
}

.product-price{
	font-size: 22px;
}

.product-stock{
	color: #74DF00;
	font-size: 20px;
	margin-top: 10px;
}

.product-info{
		margin-top: 50px;
}

/*********************************************
					VIEW
*********************************************/

.content-wrapper {
	max-width: 1140px;
	background: #fff;
	margin: 0 auto;
	margin-top: 25px;
	margin-bottom: 10px;
	border: 0px;
	border-radius: 0px;
}

.container-fluid{
	max-width: 1140px;
	margin: 0 auto;
}

.view-wrapper {
	float: right;
	max-width: 70%;
	margin-top: 25px;
}

.container {
	padding-left: 0px;
	padding-right: 0px;
	max-width: 100%;
}

/*********************************************
				ITEM
*********************************************/

.service1-items {
	padding: 0px 0 0px 0;
	float: left;
	position: relative;
	overflow: hidden;
	max-width: 100%;
	height: 321px;
	width: 130px;
}

.service1-item {
	height: 107px;
	width: 120px;
	display: block;
	float: left;
	position: relative;
	padding-right: 20px;
	border-right: 1px solid #DDD;
	border-top: 1px solid #DDD;
	border-bottom: 1px solid #DDD;
}

.service1-item > img {
	max-height: 110px;
	max-width: 110px;
	opacity: 0.6;
	transition: all .2s ease-in;
	-o-transition: all .2s ease-in;
	-moz-transition: all .2s ease-in;
	-webkit-transition: all .2s ease-in;
}

.service1-item > img:hover {
	cursor: pointer;
	opacity: 1;
}

.service-image-left {
	padding-right: 50px;
}

.service-image-right {
	padding-left: 50px;
}

.service-image-left > center > img,.service-image-right > center > img{
	max-height: 155px;
}



</style>

@extends('templates.default')

@section('content')

        @include('templates.no-filter')

<br><br>

<div class="container-fluid">
    <div class="content-wrapper">
		<div class="item-container" style = "margin-top :5%;">
			<div class="container">
				<div class="row">
					<div class="product col-md-3 service-image-left">

						<center>
						<img  class = "img-responsive" style = ""  src="{{url($product->base_image)}}"></img>
						</center>
					</div>

					<div class="container service1-items col-sm-2 col-md-2 pull-left">
						<center>
							<a id="item-1" class="service1-item">
								<img  class = "img-responsive" style = ""  src="{{url($product->base_image)}}"></img>
							</a>
							<a id="item-2" class="service1-item">
								<img  class = "img-responsive" style = ""  src="{{url($product->base_image)}}"></img>
							</a>
							<a id="item-3" class="service1-item">
								<img  class = "img-responsive" style = ""  src="{{url($product->base_image)}}"></img>
							</a>
						</center>
					</div>
				</div>

				<div class="col-md-7 " style = "margin-left : 40%;margin-top :-30%;">

					<div class="product-title">{{ $product->product_name }}</div>
					<div class="product-desc">{{ $product->product_description }}</div>
					<div class="product-rating"><i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star-o"></i> </div>
					<hr>
					<div class="product-price">$ {{ $product->price}}</div>
					<div class="product-stock">In Stock</div>
					<hr>
					{{$product->averageRating(1)}}
					<div class="btn-group cart">
						<button type="button" class="btn btn-success">
							Add to cart
						</button>
					</div>
					<div class="btn-group wishlist">
						<button type="button" class="btn btn-danger">
							Add to wishlist
						</button>
					</div>
				</div>
			</div>
		</div>



		 <div class="text-right">
                <a href="#reviews-anchor" id="open-review-box" class="btn btn-success btn-green">Leave a Review</a>
              </div>
              <div class="row" id="post-review-box" style="display:none;">
                <div class="col-md-12">
                  {!!Form::open()!!}
                  {!!Form::hidden('rating', null, array('id'=>'ratingshidden'))!!}
                  {!!Form::textarea('comment', null, array('rows'=>'5','id'=>'new-review','class'=>'form-control animated','placeholder'=>'Enter your review here...'))!!}
                  <div class="text-right">
                    <div class="stars starrr" data-rating="{{Input::old('rating',0)}}"></div>
                    <a href="#" class="btn btn-danger btn-sm" id="close-review-box" style="display:none; margin-right:10px;"> <span class="glyphicon glyphicon-remove"></span>Cancel</a>
                    <button class="btn btn-success btn-lg" type="submit">Save</button>
                  </div>
                {!!Form::close()!!}
                </div>
              </div>

							<form class="form-vertical" role="form" enctype="multipart/form-data" method="post" action="{{ route('storeReview') }}">
								{!!Form::hidden('rating', null, array('id'=>'ratingshidden'))!!}
								{!!Form::textarea('comment', null, array('rows'=>'5','id'=>'new-review','class'=>'form-control animated','placeholder'=>'Enter your review here...'))!!}
								<div class="text-right">
									<fieldset id='demo1' class="rating">
                         <input class="stars" type="radio" id="star5" name="rating" value="5" />
                         <label class = "full" for="star5" title="Awesome - 5 stars"></label>
                         <input class="stars" type="radio" id="star4" name="rating" value="4" />
                         <label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                         <input class="stars" type="radio" id="star3" name="rating" value="3" />
                         <label class = "full" for="star3" title="Meh - 3 stars"></label>
                         <input class="stars" type="radio" id="star2" name="rating" value="2" />
                         <label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                         <input class="stars" type="radio" id="star1" name="rating" value="1" />
                         <label class = "full" for="star1" title="Sucks big time - 1 star"></label>

                     </fieldset>
									<a href="#" class="btn btn-danger btn-sm" id="close-review-box" style="display:none; margin-right:10px;"> <span class="glyphicon glyphicon-remove"></span>Cancel</a>
									<button class="btn btn-success btn-lg" type="submit">Save</button>
								</div>
								<input type="hidden" name="product_id" value="{{ $product->id}}">
		              <input type="hidden" name="_token" value="{{ Session::token() }}">

		          </form>


		<div class="container-fluid">
			<div class="col-md-12 product-info">
					<ul id="myTab" class="nav nav-tabs nav_tabs">

						<li class="active"><a href="#service-one" data-toggle="tab">DESCRIPTION</a></li>
						<li><a href="#service-two" data-toggle="tab">PRODUCT INFO</a></li>
						<li><a href="#service-three" data-toggle="tab">REVIEWS</a></li>

					</ul>
				<div id="myTabContent" class="tab-content">

					Hello
						<div class="tab-pane fade in active" id="service-one">

							<section class="container product-info">
								The Corsair Gaming Series GS600 power supply is the ideal price-performance solution for building or upgrading a Gaming PC. A single +12V rail provides up to 48A of reliable, continuous power for multi-core gaming PCs with multiple graphics cards. The ultra-quiet, dual ball-bearing fan automatically adjusts its speed according to temperature, so it will never intrude on your music and games. Blue LEDs bathe the transparent fan blades in a cool glow. Not feeling blue? You can turn off the lighting with the press of a button.

								<h3>Corsair Gaming Series GS600 Features:</h3>
								<li>It supports the latest ATX12V v2.3 standard and is backward compatible with ATX12V 2.2 and ATX12V 2.01 systems</li>
								<li>An ultra-quiet 140mm double ball-bearing fan delivers great airflow at an very low noise level by varying fan speed in response to temperature</li>
								<li>80Plus certified to deliver 80% efficiency or higher at normal load conditions (20% to 100% load)</li>
								<li>0.99 Active Power Factor Correction provides clean and reliable power</li>
								<li>Universal AC input from 90~264V — no more hassle of flipping that tiny red switch to select the voltage input!</li>
								<li>Extra long fully-sleeved cables support full tower chassis</li>
								<li>A three year warranty and lifetime access to Corsair’s legendary technical support and customer service</li>
								<li>Over Current/Voltage/Power Protection, Under Voltage Protection and Short Circuit Protection provide complete component safety</li>
								<li>Dimensions: 150mm(W) x 86mm(H) x 160mm(L)</li>
								<li>MTBF: 100,000 hours</li>
								<li>Safety Approvals: UL, CUL, CE, CB, FCC Class B, TÜV, CCC, C-tick</li>
							</section>

						</div>
					<div class="tab-pane fade" id="service-two">

						<section class="container">

						</section>

					</div>
					<div class="tab-pane fade" id="service-three">

					</div>
				</div>
				<hr>
			</div>
		</div>
	</div>
</div>

<a href="{{ route('products.index') }}" class="btn btn-info">Back to all Products</a>
<a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">Edit Product</a>

<div class="col-md-6 text-right">
        {!! Form::open([
            'method' => 'DELETE',
            'route' => ['products.destroy', $product->id]
        ]) !!}
            {!! Form::submit('Delete this Product?', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </div>

@stop
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
											$(document).ready(function () {
													$("#demo1 .stars").click(function () {


															$(this).attr("checked");
													});
											});
									</script>
