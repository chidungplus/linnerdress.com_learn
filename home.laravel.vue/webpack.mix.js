const mix = require('laravel-mix');

mix.js('resources/vue/app.js', 'build/js').sourceMaps().version();

mix.sass('resources/sass/app.scss', 'build/css').version();

mix.webpackConfig({
    resolve: {
        alias: {
            '@pages': path.resolve(__dirname, 'resources/vue/pages'),
            '@css': path.resolve(__dirname, 'resources/vue/assets/css'),
            '@helper': path.resolve(__dirname, 'resources/vue/helper'),
            '@config': path.resolve(__dirname, 'resources/vue/config'),
        }
    }
});