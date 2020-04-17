var Encore = require('@symfony/webpack-encore');

if (!Encore.isRuntimeEnvironmentConfigured()) {
    Encore.configureRuntimeEnvironment(process.env.NODE_ENV || 'dev');
}

Encore
    .setOutputPath('./src/Resources/public/')

    .setPublicPath('/bundles/contaogrid')

    .setManifestKeyPrefix('contaogrid/')

    .addStyleEntry('grid', './src/Resources/assets/scss/frontend/grid.scss')

    .addEntry('backend', './src/Resources/assets/js/backend/main.js')

    .disableSingleRuntimeChunk()

    .cleanupOutputBeforeBuild()
    .enableSourceMaps(!Encore.isProduction())

    .configureBabelPresetEnv((config) => {
        config.useBuiltIns = 'usage';
        config.corejs = 3;
    })

    .enableSassLoader()
;

module.exports = Encore.getWebpackConfig();
