const mix = require('laravel-mix');
const Dotenv = require('dotenv-webpack');

mix.webpackConfig({
    resolve: {
        extensions: ['.js', '.vue'],
        alias: {
            '@': __dirname + '/resources/js',
            '~': __dirname + '/resources/images'
        }
    },
    plugins: [new Dotenv()]
});

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/admin.js', 'public/js')
    .copyDirectory('resources/images', 'public/images')
    .sass('resources/scss/app.scss', 'public/css')
    .sass('resources/scss/admin.scss', 'public/css')
    .version();
