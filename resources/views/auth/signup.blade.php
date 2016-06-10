<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Multi Step Form with Progress Bar using jQuery and CSS3</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="{{ asset('/assets/css/reset.css')}}">
		<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.css')}}">
		<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap-select.css')}}">
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css')}}">
  </head>

  <body>
@include('templates.partials.alerts')
    <!-- multistep form -->
<form id="msform" method="post" action="{{ route('auth.signup') }}">
  <!-- progressbar -->
  <ul id="progressbar">
    <li class="active">Account Setup</li>
    <li>Business Profile</li>
    <li>Personal Details</li>
  </ul>
  <!-- fieldsets -->

  <fieldset id="fieldset1">
    <h2 class="fs-title">Create your account</h2>
    <h3 class="fs-subtitle">This is step 1</h3>
        <input type="text" name="email" placeholder="Email" id="email" value="{{ old('email') }}" />
        <input type="password" name="pass" placeholder="Password" id="password"/>
        <input type="password" name="cpass" placeholder="Confirm Password" id="cpass"/>

      <input type="button" name="next" class="next action-button" value="Next" />


  </fieldset>

  <fieldset>
    <h2 class="fs-title">Business Profile</h2>
    <h3 class="fs-subtitle">Define your presence on Plus</h3>
    <input type="text" name="tradingName" placeholder="Trading Name" />
		<select class="selectpicker" data-live-search="true">
			<option data-tokens="retail shopping">Retail</option>
			<option data-tokens="manufacturing build industrial">Manufacturing</option>
			<option data-tokens="ads advertising">Advertising</option>
			<option data-tokens="creative design">Design</option>
			<option data-tokens="education school">Education</option>
		</select>

		<label class="radio-inline"><input type="radio" name="optradio">Normal User</label>
		<label class="radio-inline"><input type="radio" name="optradio">Company</label>
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>

  <fieldset>
    <h2 class="fs-title">Personal Details</h2>
    <h3 class="fs-subtitle">We will never sell it</h3>
    <input type="text" name="fname" placeholder="First Name" />
    <input type="text" name="lname" placeholder="Last Name" />
    <input type="text" name="phone" placeholder="Phone" />
    <textarea name="address" placeholder="Address"></textarea>
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="submit" name="submit" class="submit action-button" value="Submit" />
  </fieldset>
</form>


    <script src="{{ asset('/assets/js/jquery.js')}}"></script>
    <script src="{{ asset('/assets/js/jquery-validation.js')}}"></script>
		<script src="{{ asset('/assets/js/jquery-easing.js')}}"></script>
    <script src="{{ asset('/assets/js/signup.js')}}"></script>
		<script src="{{ asset('/assets/js/bootstrap.js')}}"></script>
		<script src="{{ asset('/assets/js/bootstrap-select.js')}}"></script>
    <script src="{{ asset('/assets/js/index.js')}}"></script>

  </body>
</html>
