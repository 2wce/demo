@extends('templates.default-no-filter')

@section('content')

	<h3>Update your profile</h3>





    <!--------------------header------------------------>

          @include('templates.edit_header')

    <!--------------------- end of header---------------------->

          <div id="wrapper">
              <div id="layout-static">


                <!----Left Bar--->

                    @include('templates.edit_leftbar')
                <!----End Left Bar--->



                  <div class="static-content-wrapper">
                      <div class="static-content">
                          <div class="page-content">
                            <div class="row" style = "margin:0;">
                              <div class = "col-sm-10">
                              <ol class="breadcrumb">

                                <div class="row" style = "background-color : #ffffff">
                                    <div class="col-lg-12">


                                    <h3>  Personal Details </h3>


                                      <form class="form-vertical" role="form"  enctype="multipart/form-data" method="post" action"{{ route('profile.edit') }}">

                                        <div class="row">

                                          <div class="col-lg-6">
                                            <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                                              <label for="first_name" class="control-label">First name</label>
                                              <input type="text" name="first_name" class="form-control" id="first_name" value="{{ old('first_name') ?: Auth::user()->first_name }}">
                                                      @if ($errors->has('first_name'))
                                                        <span class="help-block">{{ $errors->first('first_name') }}</span>
                                                      @endif
                                            </div>
                                          </div>

                                          <div class="col-lg-6">
                                            <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                                              <label for="last_name" class="control-label">Last name</label>
                                              <input type="text" name="last_name" class="form-control" id="last_name" value="{{  old('last_name') ?: Auth::user()->last_name }}">
                                                      @if ($errors->has('last_name'))
                                                        <span class="help-block">{{ $errors->first('last_name') }}</span>
                                                      @endif
                                            </div>
                                          </div>

                                        </div>

                                        <div class="form_group{{ $errors->has('location') ? ' has-error' : '' }}">
                                          <label for="location" class="control-label">Location</label>
                                          <input type="text" name="location" class="form-control" id="location" value="{{ old('location') ?: Auth::user()->location }}">
                                                  @if ($errors->has('location'))
                                                    <span class="help-block">{{ $errors->first('location') }}</span>
                                                  @endif
                                        </div>

                                        <br>



                                        <div class="form_group{{ $errors->has('location') ? ' has-error' : '' }}">
                                          <label for="location" class="control-label">Phone Number</label>
                                          <input type="text" name="location" class="form-control" id="location" value="{{ old('location') ?: Auth::user()->location }}">
                                                  @if ($errors->has('location'))
                                                    <span class="help-block">{{ $errors->first('location') }}</span>
                                                  @endif
                                        </div>
                                <br>

                                         <img  class = "img-responsive" style = "max-width : 150px;"  src="{{url(Auth::user()->profilePic)}}">
                                        <div class="form-group">
                                          <label class="col-sm-4 control-label">Profile Picture</label>
                                          <div class="col-sm-8">
                                           <input type="file" name="base_image" class="form-control" id="base_image">
                                         </div>
                                           @if($errors->has('base_image'))
                                               <span class = "help-block"> {{ $errors->first('base_image') }}</span>
                                           @endif

                                       </div>

                                        <div class="form-group">
                                          <button tupe="submit" class="btn btn-default">Update</button>
                                        </div>

                                        <input type="hidden" name="_token" value="{{ Session::token() }}" >

                                      </form>


                                    </div>
                                  </div>


                       </div> <!---- End of Timeline and Middle Content  -------->


                              <div class = "col-sm-2">

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


@stop
