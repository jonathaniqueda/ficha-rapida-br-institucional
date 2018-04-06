const elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(mix => {

  mix.copy('resources/assets/css', 'public/css');
  mix.copy('resources/assets/img', 'public/img');
  mix.copy('resources/assets/fonts', 'public/fonts');

  mix.scripts([
    'resources/assets/js/jquery/jquery-2.2.4.min.js',
    'resources/assets/js/bootstrap.min.js',
    'resources/assets/js/jquery.mask.min.js',
    'resources/assets/js/jquery-ui.min.js',
    'resources/assets/js/plugins.js',
    'resources/assets/js/jquery-jarallax.min.js',
    // 'resources/assets/js/map-active.js',
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

});
