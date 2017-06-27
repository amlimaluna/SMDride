const { mix } = require('laravel-mix');

mix

//Core
    .js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/scss/app.scss', 'public/css')

    .version();
