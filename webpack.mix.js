let mix = require('laravel-mix');
require('laravel-mix-tailwind');

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

mix
    .js('resources/js/public.js', 'public/js')
    .sass('resources/sass/public.scss', 'public/css')
    .tailwind()
;

if(!mix.inProduction()) {
    //mix.browserSync('localhost');
} else {
    mix.version();
}

