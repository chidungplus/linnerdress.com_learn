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

mix.js('resources/js/app.js', 'public/js').sourceMaps()
    .sass('resources/sass/app.scss', 'public/css').version();



// mix.styles([
//     'public/admin_assets2/plugins/fontawesome-free/css/all.min.css',
//     'public/admin_assets2/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css',
//     'public/admin_assets2/plugins/icheck-bootstrap/icheck-bootstrap.min.css',
//     'public/admin_assets2/plugins/jqvmap/jqvmap.min.css',
//     'public/admin_assets2/dist/css/adminlte.min.css',
//     'public/admin_assets2/plugins/overlayScrollbars/css/OverlayScrollbars.min.css',
//     'public/admin_assets2/plugins/daterangepicker/daterangepicker.css',
//     'public/admin_assets2/plugins/summernote/summernote-bs4.min.css',
//     'public/admin_assets2/plugins/sweetalert2/sweetalert2.min.css',
//     'public/admin_assets2/plugins/toastr/toastr.min.css',
//     'public/admin_assets2/css/style.css'
//  ], 'public/css/all.css');

// mix.scripts([
//      'public/admin_assets2/plugins/jquery/jquery.min.js',
//  ], 'public/js/app.js');
