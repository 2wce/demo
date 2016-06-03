@extends('templates.default')

@section('content')

	<h3>Edit Product</h3>



	{!! Form::model($product, [

      'files' => 'true',
	    'method' => 'PATCH',
	    'route' => ['products.update', $product->id]
	]) !!}
  <div class="col-lg-6">
	<div class="form-group">
	    {!! Form::label('product_name', 'Product Name:', ['class' => 'control-label']) !!}
	    {!! Form::text('product_name', null, ['class' => 'form-control']) !!}
	</div>
</div>
 <div class="col-lg-6">
	<div class="form-group">
			{!! Form::label('price', 'Price:', ['class' => 'control-label']) !!}
			{!! Form::text('price', null, ['class' => 'form-control']) !!}
	</div>
</div>
 <div class="col-lg-6">
	<div class="form-group">
	    {!! Form::label('product_description', 'Description:', ['class' => 'control-label']) !!}
	    {!! Form::textarea('product_description', null, ['class' => 'form-control']) !!}
	</div>
</div>
 <div class="col-lg-6">
	<div class="form-group">
		<label class="col-sm-2 control-label">Base Image</label>
		<div class="col-sm-8">
		 <input type="file" name="base_image" class="form-control" id="base_image">
	 </div>
		 @if($errors->has('base_image'))
				 <span class = "help-block"> {{ $errors->first('base_image') }}</span>
		 @endif
</div>
 </div>
 <div class="form-group">
	{!! Form::submit('Update product', ['class' => 'btn btn-primary']) !!}
</div>
	{!! Form::close() !!}




@stop
