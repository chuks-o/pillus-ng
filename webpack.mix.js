let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/tagger.js', 'public/js/tag.js')
	.js('public/pillus/admin/template/assets/vendor/jquery/jquery.min.js',
	 'public/js/admin.js')
	.js('public/pillus/admin/template/assets/vendor/bootstrap/js/bootstrap.min.js',
	  'public/js/admin.js')
	.js('public/pillus/admin/template/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js',
	 'public/js/admin.js')
	.js('public/pillus/admin/template/assets/scripts/klorofil-common.js',
	 'public/js/admin.js')
	.sass('resources/assets/sass/app.scss', 'public/css');

mix.styles([
	'public/pillus/admin/template/assets/vendor/bootstrap/css/bootstrap.min.css',
	'public/pillus/admin/template/assets/vendor/font-awesome/css/font-awesome.min.css',
	'public/pillus/admin/template/assets/vendor/linearicons/style.css',
	'public/pillus/admin/template/assets/vendor/chartist/css/chartist-custom.css',
	'public/pillus/admin/template/assets/css/main.css'
], 'public/css/dashboard.css');

mix.styles([
	'public/pillus/css/style.css',
	'public/pillus/bootstrap/css/bootstrap.min.css',
	'public/pillus/engine1/style.css',
	'pillus/css/animate.css',
],'public/css/insight-app.css');
