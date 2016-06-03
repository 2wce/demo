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
<!-- Shows a form to crate a new status -->
<div class="col-sm-12">

    <div class="panel-heading">
      <h2>
        <ul class="nav nav-tabs">
          <li class="active"><a href="#tab-12-1" data-toggle="tab"><!---  <img  class = "img-responsive" width ="20"  src="url('interface.png')">-->Share an Update</a></li>
          <li><a href="#tab-12-2" data-toggle="tab">Post a Product </a></li>
          <li><a href="#tab-12-3" data-toggle="tab">Post a Service</a></li>
        </ul>
      </h2>
    </div>
    <div class="panel-body">
      <div class="tab-content">
        <div class="tab-pane active" id="tab-12-1">
          <form class="form-vertical" role="form" enctype="multipart/form-data" method="post" action="{{ route('status.post') }}">

              <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                  <textarea{{ $errors->count() ? '': ' autofocus' }} {{ $errors->has('status') ? ' autofocus' : '' }} placeholder="What's up, {{ Auth::user()->getFirstnameOrUsername() }}?" name="status" class="form-control" id="status" value="{{ old('status') }}"></textarea>
                  @if ($errors->has('status'))
                    <span class="help-block">{{ $errors->first('status') }}</span>
                  @endif
              </div>

              <div class="form-group">
              <a href="#" id="anch"><img   class = "img-responsive" width = "30" height = "30"  src="{{url('112207.png')}}"></a>
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
        <div class="tab-pane" id="tab-12-2">
          <form class="form-horizontal tabular-form" enctype="multipart/form-data" role="form" method="post" action ="{{ route('products.store') }}">

               <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                 <label for="form-name" class="col-sm-2 control-label">Product Name</label>
                 <div class="col-sm-8 tabular-border">
                   <input type="text" class="form-control" name ="product_name" id="product_name" >
                    @if ($errors->has('product_name'))
                     <span class="help-block">{{ $errors->first('product_name') }}</span>
                   @endif
                 </div>
               </div>



               <div class="form-group">
                 <label for="form-website" class="col-sm-2 control-label">Price</label>
                 <div class="col-sm-8 tabular-border">
                   <input type="number" name = "price" class="form-control" id="price" placeholder="$">
                 </div>
               </div>

               <div class="form-group">
                 <label for="selector1" class="col-sm-2 control-label">Categories</label>
                 <div class="col-sm-8 tabular-border">

                 <select class="form-control" name="category">
                   @foreach($catnav as $cat)

      <option value="{{$cat->id}}">{{$cat->category_name}}</option>
    @endforeach
  </select>

</div>

             </div>

             <div class="form-group">
               <label for="radio" class="col-sm-2 control-label">Product Condition</label>
               <div class="col-sm-8">

                 <div class="radio block"><label><input name="condition"  value ="New" type="radio" checked > New </label></div>
                 <div class="radio block"><label><input name="condition" value = "Repairs" type="radio" > Repairs Required</label></div>
                 <div class="radio block"><label><input name="condition" type="radio" value ="Used" > Used</label></div>
               </div>
             </div>

               <div class="form-group">
                 <label class="col-sm-2 control-label">Product Description</label>
                 <div class="col-sm-8">
                   <textarea class="form-control fullscreen" name = "product_description"></textarea>
                 </div>
               </div>

               <div class="form-group">
                 <label class="col-sm-2 control-label">Base Image</label>
                 <div class="col-sm-8">
                  <input type="file" name="base_image" class="form-control" id="base_image">
                </div>


              </div>
               <div class="form-group">
       <button tupe="submit" class="btn btn-default"  style="float:right">Share</button>
     </div>

     <input type="hidden" name="_token" value="{{ Session::token() }}" >
             </form>
        </div>
        <div class="tab-pane" id="tab-12-3">
          <form class="form-horizontal tabular-form" enctype="multipart/form-data" role="form" method="post" action ="{{ route('services.store') }}">

              <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                <label for="form-name" class="col-sm-2 control-label">Service Name</label>
                <div class="col-sm-8 tabular-border">
                  <input type="text" class="form-control" name ="name" id="name" >
                   @if ($errors->has('product_name'))
                    <span class="help-block">{{ $errors->first('name') }}</span>
                  @endif
                </div>
              </div>



              <div class="form-group">
                <label for="form-website" class="col-sm-2 control-label">Charge</label>
                <div class="col-sm-8 tabular-border">
                  <input type="number" name = "charge" class="form-control" id="charge" placeholder="$/Hour">
                </div>
              </div>

              <div class="form-group">
                <label for="selector1" class="col-sm-2 control-label">Service Type</label>
                <div class="col-sm-8 tabular-border">

                  <select class="form-control" name="type">
                    @foreach($typenav as $type)

       <option value="{{$type->id}}">{{$type->name}}</option>
     @endforeach
   </select>


              </div>
            </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Description</label>
                <div class="col-sm-8">
                  <textarea class="form-control fullscreen" name = "description"></textarea>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Base Image</label>
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
        </div>
      </div>
    </div>
  </div>
