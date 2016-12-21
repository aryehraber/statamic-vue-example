var elixir = require('laravel-elixir');

require('laravel-elixir-vue');

elixir(function(mix) {
    mix.webpack([
        './resources/assets/js/main.js'
    ], './resources/assets/js/scripts.js');
});