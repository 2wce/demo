@extends('templates.default')

@section('content')

	<h3>Add New  Service</h3>



		<div class="tab-pane" id="tab-edit">
					<div class="panel">
						<div class="panel-heading">

						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-12">
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


		    {!! Form::select('type',
		        (['0' => 'Select Service Type'] + $types),
		            null,
		            ['class' => 'form-control']) !!}



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
				</div>

@stop
