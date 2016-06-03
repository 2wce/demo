
<style>
#txtFil
{

opacity: 0;
    filter:alpha(opacity=0);
    -moz-opacity:0;
    -khtml-opacity: 0;
    position: absolute;

    z-index: 20;
    cursor: pointer;
}
#anch
{
    position: absolute;

    z-index: 10;

}



</style>

             <div class="tabs">

	    <input type="radio" name="tabs" id="tab1" checked >
	    <label for="tab1">
	        <i class="fa fa-quote-left"></i><span>Share an Update</span>
	    </label>

	    <input type="radio" name="tabs" id="tab2">
	    <label for="tab2">
	        <i class="fa fa-desktop"></i><span>Share a Product</span>
	    </label>

	    <input type="radio" name="tabs" id="tab3">
	    <label for="tab3">
	        <i class="fa fa-wrench"></i><span>Share a Service</span>
	    </label>

	    <div id="tab-content1" class="tab-content">


                         <div class="panel-body">
                           <form class="form-vertical" role="form" enctype="multipart/form-data" method="post" action="{{ route('status.post') }}">
                             <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                                 <textarea{{ $errors->count() ? '': ' autofocus' }} {{ $errors->has('status') ? ' autofocus' : '' }} placeholder="What's up, {{ Auth::user()->getFirstnameOrUsername() }}?" name="status" class="form-control" id="status" value="{{ old('status') }}"></textarea>
                                 @if ($errors->has('status'))
                                   <span class="help-block">{{ $errors->first('status') }}</span>
                                 @endif
                             </div>

                             <div class="form-group">
                               <a href="#" id="anch"><i style = "font-size: 20px;margin-left:5%;" class="fa fa-photo"></i></a>
                               <div class="col-sm-8">
                                <input type="file" name="post_image" class="form-control" id="txtFil">
                              </div>
                                @if($errors->has('base_image'))
                                    <span class = "help-block"> {{ $errors->first('base_image') }}</span>
                                @endif

                            </div>



                             <div class="form-group">
                                 <button type="submit" class="btn btn-default" style="float:right">Share</button>
                             </div>

                             <input type="hidden" name="_token" value="{{ Session::token() }}">

                      </form>
                         </div>

	    </div> <!-- #tab-content1 -->

	    <div id="tab-content2" class="tab-content">

        <form class="form-horizontal tabular-form" enctype="multipart/form-data" role="form" method="post" action ="{{ route('products.store') }}">

             <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
               <p for="form-name" class="col-sm-2 control-label">Product Name</p>
               <div class="col-sm-8 tabular-border">
                 <input type="text" class="form-control" name ="product_name" id="product_name" >
                  @if ($errors->has('product_name'))
                   <span class="help-block">{{ $errors->first('product_name') }}</span>
                 @endif
               </div>
             </div>



             <div class="form-group">
               <p for="form-website" class="col-sm-2 control-label">Price</p>
               <div class="col-sm-8 tabular-border">
                 <input type="number" name = "price" class="form-control" id="price" placeholder="$">
               </div>
             </div>

             <div class="form-group">
               <p for="selector1" class="col-sm-2 control-label">Categories</p>
               <div class="col-sm-8 tabular-border">

               <select class="form-control" name="category">
                 @foreach($catnav as $cat)

    <option value="{{$cat->id}}">{{$cat->category_name}}</option>
  @endforeach
</select>

</div>

           </div>


               <div class="radio block"><input name="condition" type = "hidden" value ="New" type="radio" checked / > </div>


           <div class="form-group">
									<p for="checkbox" class="col-sm-2 control-label">Product Condition</p>
									<div class="col-sm-8">

										<div class="checkbox-inline"><p><input type="checkbox" checked> New</p></div>
                    	<div class="checkbox-inline"><p><input type="checkbox"> Repairs Required</p></div>
                      	<div class="checkbox-inline"><p><input type="checkbox"> Used</p></div>


									</div>
								</div>



             <div class="form-group">
               <p class="col-sm-2 control-label">Product Description</p>
               <div class="col-sm-8">
                 <textarea class="form-control fullscreen" name = "product_description"></textarea>
               </div>
             </div>

             <div class="form-group">
               <p class="col-sm-2 control-label">Base Image</p>
               <div class="col-sm-8">
                <input type="file" name="base_image" class="form-control" id="base_image">
              </div>


            </div>
             <div class="form-group">
     <button tupe="submit" class="btn btn-default"  style="float:right">Share</button>
   </div>

   <input type="hidden" name="_token" value="{{ Session::token() }}" >
           </form>
	    </div> <!-- #tab-content2 -->

	    <div id="tab-content3" class="tab-content">

        <form class="form-horizontal tabular-form" enctype="multipart/form-data" role="form" method="post" action ="{{ route('services.store') }}">

            <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
              <p for="form-name" class="col-sm-2 control-label">Service Name</p>
              <div class="col-sm-8 tabular-border">
                <input type="text" class="form-control" name ="name" id="name" >
                 @if ($errors->has('name'))
                  <span class="help-block">{{ $errors->first('name') }}</span>
                @endif
              </div>
            </div>



            <div class="form-group">
              <p for="form-website" class="col-sm-2 control-label">Charge</p>
              <div class="col-sm-8 tabular-border">
                <input type="number" name = "charge" class="form-control" id="charge" placeholder="$/Hour">
              </div>
            </div>

            <div class="form-group">
              <p for="selector1" class="col-sm-2 control-label">Service Type</p>
              <div class="col-sm-8 tabular-border">

                <select class="form-control" name="type">
                  @foreach($typenav as $type)

     <option value="{{$type->id}}">{{$type->name}}</option>
    @endforeach
    </select>


            </div>
          </div>

            <div class="form-group">
              <p class="col-sm-2 control-label">Description</p>
              <div class="col-sm-8">
                <textarea class="form-control fullscreen" name = "description"></textarea>
              </div>
            </div>

            <div class="form-group">
              <p class="col-sm-2 control-label">Base Image</p>
              <div class="col-sm-8">
               <input type="file" name="base_image" class="form-control" id="base_image">
             </div>
               @if($errors->has('base_image'))
                   <span class = "help-block"> {{ $errors->first('base_image') }}</span>
               @endif

           </div>
            <div class="form-group">
    <button tupe="submit" class="btn btn-default">Save</button>
    </div>

    <input type="hidden" name="_token" value="{{ Session::token() }}" >
          </form>

	    </div> <!-- #tab-content3 -->

	</div> <!-- .tabs -->
