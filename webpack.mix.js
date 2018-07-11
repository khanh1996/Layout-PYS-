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
   .sass('resources/assets/sass/app.scss', 'public/css')
    .copy(
        'node_modules/jquery',
        'public/plugin/jquery'
    ).copy(
        'node_modules/bootstrap',
        'public/plugin/bootstrap'
    ).copy(
        'resources/assets/plugin/fontawesome',
        'public/plugin/fontawesome'
    ).copy(
    'resources/assets/anh',
    'public/image'
);
    // .js([
    //     'resources/assets/js/backend/before.js',
    //     'resources/assets/js/backend/app.js',
    //     'resources/assets/js/backend/after.js'
    // ], 'public/js/backend.js');