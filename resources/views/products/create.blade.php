@extends('templates.default')

@section('content')

	<h3>Add New  Product</h3>



		<div class="tab-pane" id="tab-edit">
					<div class="panel">
						<div class="panel-heading">
							<h2>Edit</h2>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-12">
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


		    {!! Form::select('category',
		        (['0' => 'Select a Category'] + $categories),
		            null,
		            ['class' => 'form-control']) !!}



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
<div class="" style = "margin-left : 2%;">
										<div class="form-group col-lg-4">
							{!! Form::label('file1', 'Base Image', ['class' => 'control-label']) !!}
							{!! Form::file('base_image', ['id'=>'base_image']) !!}
					</div>
					<div class="form-group col-lg-4">
							{!! Form::label('file2', 'Alt Image', ['class' => 'control-label']) !!}
							{!! Form::file('file2', ['id'=>'file2']) !!}
					</div>
					<div class="form-group col-lg-4">
							{!! Form::label('file3', 'Alt Image 2', ['class' => 'control-label']) !!}
							{!! Form::file('file3', ['id'=>'file3']) !!}
					</div>

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
				</div>

@stop
