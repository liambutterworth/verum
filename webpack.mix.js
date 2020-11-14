const mix = require('laravel-mix');

mix
    .js('./resources/js/main.js', 'public/js')
    .sass('./resources/css/main.scss', 'public/css')
    .webpackConfig({
        resolve: {
            alias: {
                js: path.resolve('./resources/js'),
                components: path.resolve('./resources/js/components'),
                layouts: path.resolve('./resources/js/layouts'),
                pages: path.resolve('./resources/js/pages'),
                support: path.resolve('./resources/js/support'),
            },
        },
    });
