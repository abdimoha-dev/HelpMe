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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');

mix.sass('resources/assets/style.scss','public/css/site.css');

mix.scripts([
    'resources/assets/js/jquery-2.2.4.min.js',
    'resources/assets/js/popper.min.js',
    'resources/assets/js/bootstrap.min.js',
    'resources/assets/js/plugins.js',
    'resources/assets/js/slick.min.js',
    'resources/assets/js/footer-reveal.min.js',
    'resources/assets/js/active.js',
], 'public/js/site.js');



mix.styles(['resources/assets/css/bootstrap.min.css','',''], 'public/css/dash.css');
mix.scripts(['', ''], 'public/js/dash.js');
