const mix = require("laravel-mix");

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
mix.disableSuccessNotifications();

mix.options({
        processCssUrls: true
    })
    .js("resources/js/app.js", "public/dist/js")
    .sass("resources/sass/font.scss", "public/dist/css", {
        // Rewrite CSS urls for font.css
        processUrls: true,
    })
    .postCss(
        "resources/css/app.css",
        "public/dist/css",
        [require("tailwindcss")]
    );
