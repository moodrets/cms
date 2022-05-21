const { defineConfig } = require('@vue/cli-service')
module.exports = defineConfig({
    transpileDependencies: true,
    outputDir: '../../public/assets/account',
    publicPath: process.env.NODE_ENV === 'production' ? '/assets/account/' : '/accountaccount',
    indexPath: process.env.NODE_ENV === 'production' ? '../../../resources/views/pages/account.blade.php' : 'index.html',
})
