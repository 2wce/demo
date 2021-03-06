var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 */

elixir.config.sourcemaps = false;

elixir(function(mix) {
	mix.copy('resources/assets/bower/bootstrap/dist/css/bootstrap.min.css', 'public/assets/css/bootstrap.css');
	mix.copy('resources/assets/bower/bootstrap-select/dist/css/bootstrap-select.min.css', 'public/assets/css/bootstrap-select.css');
	mix.copy('resources/assets/bower/bootstrap-select/dist/js/bootstrap-select.min.js', 'public/assets/js/bootstrap-select.js');
	mix.copy('resources/assets/bower/bootstrap/dist/js/bootstrap.min.js', 'public/assets/js/bootstrap.js');
	mix.copy('resources/assets/bower/jquery/dist/jquery.js', 'public/assets/js/jquery.js');
	mix.copy('resources/assets/bower/plus-custom/dist/js/signup.js', 'public/assets/js/signup.js');
	mix.copy('resources/assets/bower/jquery-validation/dist/jquery.validate.min.js', 'public/assets/js/jquery-validation.js');
	mix.copy('resources/assets/bower/jquery-easing/jquery.easing.min.js', 'public/assets/js/jquery-easing.js');
	mix.copy('resources/assets/bower/bootstrap/dist/fonts', 'public/assets/fonts/');
	mix.copy('resources/assets/bower/plus-custom/dist/js/scroll.js', 'public/assets/js/scroll.js');
	mix.copy('resources/assets/bower/plus-custom/dist/js/index.js', 'public/assets/js/index.js');
	mix.copy('resources/assets/bower/plus-custom/dist/css/style.css', 'public/assets/css/style.css');
	mix.copy('resources/assets/bower/plus-custom/dist/css/reset.css', 'public/assets/css/reset.css');
	mix.copy('resources/assets/bower/plus-custom/dist/js/review.js', 'public/assets/js/review.js');
	mix.copy('resources/assets/bower/plus-custom/dist/js/application.js', 'public/assets/js/application.js');

	mix.styles([
        '../bower/plus-custom/dist/css/styles.css'
    ], 'public/assets/css/vendor.css');

	mix.scripts([
    	'../bower/bootstrap/dist/js/bootstrap.js',
    	'../bower/jquery-ui/jquery-ui.js',
			'../bower/velocity/velocity.js',
			'../bower/velocity/velocity.ui.js',
			'../bower/jscroll/jquery.jscroll.js',
			'../bower/jquery-easing/jquery.easing.js',
			'../bower/image-picker/image-picker/image-picker.js',
			'../bower/bootstrap-tokenfield/js/bootstrap-tokenfield.js',
			'../bower/plus-custom/dist/js/enquire.min.js',
			'../bower/plus-custom/dist/js/jquery.nanoscroller.min.js',
			'../bower/plus-custom/dist/js/jquery-mt-select.min.js'

	], 'public/assets/js/vendor.js');
});
