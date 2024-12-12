let mix = require('laravel-mix');

//2024-12-08 
//mix.js('resources/js/app.js', 'public/js')
//    .vue({runtimeOnly: true});
//https://laracasts.com/discuss/channels/elixir/laravel-mix-60-vue3-huge-bundle-size-how-to-use-only-vue-runtime

mix.sass('resources/css/style.scss', 'public/css');
mix.js('resources/js/app.js', 'public/js').vue({ runtimeOnly: true});

mix.autoload({
    jquery: ['$', 'global.jquery',"jquery","global.$","jquery","global.jquery"]
});
