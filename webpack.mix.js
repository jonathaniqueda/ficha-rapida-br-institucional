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

mix.copyDirectory('resources/assets/img', 'public/img');
mix.copyDirectory('resources/assets/fonts', 'public/fonts');

mix.js([
    'resources/assets/js/jquery/jquery-2.2.4.min.js',
    'resources/assets/js/bootstrap.min.js',
    'resources/assets/js/jquery-ui.min.js',
    'resources/assets/js/plugins.js',
    'resources/assets/js/jquery-jarallax.min.js',
    'resources/assets/js/map-active.js',
    'resources/assets/js/active.js',
    'resources/assets/js/sweetalert.min.js',
    'resources/assets/js/app.js'
], 'public/js/app.js');

mix.styles([
    'resources/assets/css/core-style.css',
    'resources/assets/css/style.css',
    'resources/assets/css/responsive.css',
    'resources/assets/css/sweetalert.css'
], 'public/css/vendor.css');

if (mix.inProduction()) {
    mix.version();
}