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

mix.js('resources/js/app.js', 'public/js')
   .js('resources/js/admin.js', 'public/js')
   .js('resources/js/seo.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .options({
        processCssUrls:false,
        postCss: [
            require('postcss-css-variables')(),
            require('autoprefixer')({
                browsers: ['last 40 versions'],
                grid: true
            })
        ]
    })
   .sass('resources/sass/admin.scss', 'public/css');;

