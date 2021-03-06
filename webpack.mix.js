const mix = require('laravel-mix');

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

// mix.js('resources/js/app.js', 'public/js')
//     .vue()
//     .sass('resources/sass/app.scss', 'public/css');

mix.styles([
    'resources/css/bootstrap.min.css',
    'resources/css/app.css',
], 'public/css/all.css');


mix.scripts([
    'resources/js/bootstrap.bundle.min.js',
    'resources/js/app.js',
], 'public/js/all.js');