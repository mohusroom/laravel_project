const mix = require('laravel-mix');
const glob = require('glob');
const path = require('path');

mix.webpackConfig({
    resolve: {
        alias: {
            '@sass': path.resolve(__dirname, 'resources/sass'),
            '@js': path.resolve(__dirname, 'resources/js'),
        }
    },
})

const ignoreFiles = {
   'sass': [
       '**/_share/**',
   ],
   'js': [
       '**/_share/**',
   ],
}

glob.sync('resources/sass/**/*.scss', {
   ignore: ignoreFiles['sass']
}).map(function (file) {
   let output = file.replace(/resources\/sass/, 'public\/css');

   mix.sass(file, output.replace(/\.scss/, '.css'))
       .options({
           postCss: [
               require('postcss-css-variables')()
           ]
       })

   if (mix.inProduction()) {
       mix.version();
   }
});

glob.sync('resources/js/**/*.js', {
   ignore: ignoreFiles['js']
}).map(function (file) {
   let output = file.replace(/resources\/js/, 'public\/js');

   mix.js(file, output)

   if (mix.inProduction()) {
       mix.version();
   }
});
