const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');
require('laravel-mix-jigsaw');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets');

mix.jigsaw()
    .js('source/_assets/js/main.js', 'js')
    .copy(
        'node_modules/@fortawesome/fontawesome-free/webfonts/fa-solid*',
        'source/assets/fonts'
    )
    .copy(
        'node_modules/@fortawesome/fontawesome-free/webfonts/fa-brands*',
        'source/assets/fonts'
    )
    .sass('source/_assets/sass/main.scss', 'css')
    .options({
        processCssUrls: false,
        postCss: [tailwindcss()],
    })
    .version();
