const mix = require('laravel-mix');
const build = require('./tasks/build.js');
const tailwindcss = require('tailwindcss');
// todo: purgecss?

mix.copy(
    'node_modules/@fortawesome/fontawesome-free/webfonts/fa-solid*',
    'source/assets/fonts'
);

mix.copy(
    'node_modules/@fortawesome/fontawesome-free/webfonts/fa-brands*',
    'source/assets/fonts'
);

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets');
mix.webpackConfig({
    plugins: [
        build.jigsaw,
        build.browserSync(),
        build.watch([
            'source/**/*.md',
            'source/**/*.php',
            'source/**/*.scss',
            '!source/**/_tmp/*'
        ]),
    ]
});

mix.js('source/_assets/js/main.js', 'js')
    .sass('source/_assets/sass/main.scss', 'css')
    .options({
        processCssUrls: false,
        postCss: [tailwindcss()],
    })
    // todo: purgecss?
    .version();

if (!mix.inProduction()) {
    mix.sourceMaps();
}
