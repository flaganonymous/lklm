var CopyWebpackPlugin = require('copy-webpack-plugin');

var Encore = require('@symfony/webpack-encore');

Encore
    .setOutputPath('web/assets/')
    .setPublicPath('/assets/')
    // empty the outputPath dir before each build
    .cleanupOutputBeforeBuild()


.addEntry('js/main', './app/Resources/assets/js/main.js')
    .addStyleEntry('css/main', './app/Resources/assets/sass/main.scss')

.addEntry('js/keolis', './app/Resources/assets/js/keolis.js')
    .addEntry('js/sncf', './app/Resources/assets/js/sncf.js')

.createSharedEntry('js/vendor', ['foundation-sites'])

.enableSassLoader()
    .autoProvidejQuery()

.enableSourceMaps(!Encore.isProduction())

// create hashed filenames (e.g. app.abc123.css)
.enableVersioning()

.addPlugin(new CopyWebpackPlugin([{
    from: './app/Resources/assets/img',
    to: 'img'
}]));

module.exports = Encore.getWebpackConfig();