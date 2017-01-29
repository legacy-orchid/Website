var gulp = require('gulp');
var elixir = require('laravel-elixir');


elixir.config.assetsPath = 'content/_includes/_assets';
elixir.config.publicPath = 'public/assets';

elixir(function(mix) {

    mix.less('app.less');

    mix.copy('./content/_includes/_assets/prism','./public/assets/prism');

    mix.copy('./content/_includes/_assets/vendor/bootstrap/dist/fonts/', './public/assets/fonts');
    mix.copy('./content/_includes/_assets/vendor/simple-line-icons/fonts/','./public/assets/fonts');

    mix.copy('./content/_includes/_assets/img','./public/assets/img');

    mix.copy('./content/_includes/_assets/favicon','./public/');


    mix.scripts([
        //"./content/_includes/_assets/vendor/jquery/dist/jquery.min.js",
        //"./content/_includes/_assets/vendor/bootstrap/dist/js/bootstrap.min.js",
        "./content/_includes/_assets/vendor/prism/prism.js",
        "./content/_includes/_assets/vendor/prism/components/prism-php.js",
        "./content/_includes/_assets/vendor/prism/components/prism-php-extras.js",
        "./content/_includes/_assets/vendor/prism/components/prism-javascript.js",
        //"./content/_includes/_assets/js/app.js"
    ], './public/assets/js/app.js');


});