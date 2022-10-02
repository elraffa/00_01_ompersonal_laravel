// webpack.mix.js

let mix = require('laravel-mix');

mix.js('src/app.js', 'js').setPublicPath('public');

mix.sass('src/sass/main.scss', 'css').setPublicPath('public');