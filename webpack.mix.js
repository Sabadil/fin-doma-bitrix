
let mix = require('laravel-mix');


mix.js("local/templates/doma/assets/_src/js/app.js", "local/templates/doma/assets/_dist/js");
mix.sass('local/templates/doma/assets/_src/css/app.scss', 'local/templates/doma/assets/_dist/css');

