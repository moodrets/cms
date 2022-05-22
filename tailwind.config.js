const colors = require('tailwindcss/colors')

module.exports = {
    content: ['./resources/**/*.blade.php', './resources/**/*.js', './resources/**/*.vue'],
    darkMode: 'class',
    theme: {
        extend: {
            colors: {
                'main': '#2B2A33',
                'main-10': '#222222',
                'brand': '#E84801',
                'secondary': '#EDEDED',
                'secondary-10': '#D0D0D0',
                'secondary-20': '#8B8B8B',
                'secondary-30': '#666666',
            },
            fontSize: {
                '16px': '16px',
                '18px': '18px',
                '34px': '34px',
            },
            lineHeight: {
                '34px': '34px',
            },
        },
    },
}
