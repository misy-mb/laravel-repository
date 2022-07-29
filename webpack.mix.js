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

// mix.js('resources/assets1/js/script.js', 'public/js')
//     .sass('resources/assets1/scss/style.scss', 'public/css')
//     .sourceMaps();
// mix.js('resources/assets/js/app.js', 'public/frontend/js')
//     .sass('resources/assets/scss/styles.scss', 'public/frontend/css')
//     .sourceMaps();
// mix.js('resources/assets-coffee/js/main.js', 'public/js')
   mix .sass('resources/assets-coffee/scss/bootstrap/scss/bootstrap.scss', 'public/css/style.css')
    .sourceMaps();
