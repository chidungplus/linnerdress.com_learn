const mix = require('laravel-mix');
const path = require('path');
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

mix.js('resources/js/app.js', 'build/js').sourceMaps()
    .sass('resources/sass/app.scss', 'build/css')
    .version();

mix.webpackConfig({
    resolve: {
        alias: {
            '@pages': path.resolve(__dirname, 'resources/js/pages'),
            '@css': path.resolve(__dirname, 'resources/js/assets/css'),
            '@helper': path.resolve(__dirname, 'resources/js/helper'),
            '@config': path.resolve(__dirname, 'resources/js/config'),
        }
    }
});