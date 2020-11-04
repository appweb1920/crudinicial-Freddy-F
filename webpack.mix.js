const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    /* NOTA: APUNTES:
            SASS es un precompilador de estilos, que a diferencia de CSS (solo estilos), SASS puede
            hacer uso de variables y otras "herramientas" de utilidad que luego son compiladas
            y generan una hoja de estilos en CSS.

            En las siguientes lineas especificamos que se agreguen las hojas de estilos SASS de las 
            rutas especificadas. (ya sean del tipo SASS o LESS)
            Puede sr util para tener estilos especificos o variaciones según los roles, etc.
            NOTA: Los archivos .SASS o .LESS deben ser creados manualmente, aquí solo decimos que los "considere".

            Al usar el comando "npm run dev" o "npm run watch" (en terminal de laravel) se crearan los archivos y se
            compilaran las hojas de estilos que hayamos especificado almacenandose en la segunda ruta.

            NOTA: Con lo anterior, se BORRARAN los estilos existentes en dichos archivos (CSS), y se
            remplazarán por los archivos CSS creados por el archivo SASS o LESS.
    */ 
    /* FIXME: Al ejecutar "npm run dev" algo no funcionó, por eso se queda así por ahora */
    .sass('resources/sass/misEstilosSASS.scss', 'public/css')  //NOTA: Estilos distintos en SASS
    .less('resources/less/misEstilosLESS.less', 'public/css');  //NOTA: Estilos distintos en LESS