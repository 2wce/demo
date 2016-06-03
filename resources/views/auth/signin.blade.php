@extends('templates.default')

@section('content')

	<h3>Update your profile</h3>





    <!--------------------header------------------------>

          @include('templates.header')

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


																		<form class="form-vertical" role="form" method="post" action="{{ route('auth.signin') }}">

														            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
														                <label for="email" class="control-label">Email</label>
														                <input type="text" name="email" class="form-control" id="email" value="{{ old('email') }}">
														                @if ($errors->has('email'))
														                	<span class="help-block">{{ $errors->first('email') }}</span>
														                @endif
														            </div>

														            <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
														                <label for="username" class="control-label">Or username</label>
														                <input type="text" name="username" class="form-control" id="username" value="{{ old('username') }}">
														                @if ($errors->has('username'))
														                	<span class="help-block">{{ $errors->first('username') }}</span>
														                @endif
														            </div>

														            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
														                <label for="password" class="control-label">Password</label>
														                <input type="password" name="password" class="form-control" id="password" value="">
														                @if ($errors->has('password'))
														                	<span class="help-block">{{ $errors->first('password') }}</span>
														                @endif
														            </div>

														            <div class="checkbox">
														            	<label>
														            		<input type="checkbox" name="remember" id="remember"{{ old('remember') ? ' checked' : '' }}> Remember me
														            	</label>
														            </div>

														            <div class="form-group">
														                <button type="submit" class="btn btn-default">Sign in</button>
														            </div>

														            <input type="hidden" name="_token" value="{{ Session::token() }}">

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
