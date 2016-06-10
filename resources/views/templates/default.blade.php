<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>PlusAfrik</title>
	<!-- Latest compiled and minified CSS -->
	<link href="{{ asset('/assets/css/bootstrap.css') }}" rel="stylesheet">
	<link href="{{ asset('/assets/css/vendor.css') }}" rel="stylesheet">
	<link href="{{ asset('/assets/fonts/glyphicons-halflings-regular.eot') }}" rel="stylesheet">
<style
	@font-face{
			font-family: 'Glyphicon Halflings';
			src: url('/assets/fonts/glyphicons-halflings-regular.eot');
	}
</style>

</head>

<body class="animated-content">

  @include('templates.header')
	<div class="container">

		@yield('content')
	</div>

	<!-- Latest compiled and minified JavaScript -->
		<script type="text/javascript" src="{{ asset('/assets/js/jquery.js') }}"></script>
		<script type="text/javascript" src="{{ asset('/assets/js/bootstrap.js') }}"></script>
		<script type="text/javascript" src="{{ asset('/assets/js/bootstrap-select.js') }}"></script>
		<script type="text/javascript" src="{{ asset('/assets/js/review.js') }}"></script>
		<script type="text/javascript" src="{{ asset('/assets/js/application.js') }}"></script>
  	<script type="text/javascript" src="{{ asset('/assets/js/vendor.js') }}"></script>
			<script type="text/javascript" src="{{ asset('/assets/js/scroll.js') }}"></script>


</body>


</html>
