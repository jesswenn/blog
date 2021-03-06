const mix = require('laravel-mix');

// npm rebuild node-sass --force
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
   

//    sassLoader: {
//   includePaths: [
//     path.resolve(__dirname, './sass')
//   ]
// },

// mix.js('resources/assets/js/app.js', 'public/js')
//    .sass('resources/assets/sass/app.scss', 'public/css')

//    .js('resources/assets/js/dashboard.js', 'public/js')
//    .sass('resources/assets/sass/dashboard.scss', 'public/css')

//    .browserSync('alenabdula.dev')
// ;
