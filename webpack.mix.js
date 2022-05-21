const mix = require('laravel-mix')

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/index.js', 'public/js')
    .extract()
    .sass('resources/scss/index.scss', 'public/css', {}, [require('tailwindcss'), require('autoprefixer')])
    .vue()

mix.webpackConfig({
    optimization: {
        moduleIds: 'deterministic',
        splitChunks: {
            chunks: 'all',
        },
    },
})

if (mix.inProduction()) {
    mix.version()
}
mix.options({
    terser: {
        terserOptions: {
            mangle: true,
            compress: {
                drop_console: true,
                drop_debugger: true,
            },
            output: {
                comments: false,
                beautify: false,
            },
        },
    },
})
