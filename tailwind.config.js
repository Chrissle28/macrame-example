const plugin = require('tailwindcss/plugin');

module.exports = {
    content: [
        './resources/**/*.vue',
        './packages/macramejs/admin-vue3/**/*.vue',
    ],
    theme: {
        container: {
            center: true,
            padding: '27px',
        },
        borderRadius: {
            full: '9999px',
            lg: '19px',
            md: '15px',
            sm: '11px',
            DEFAULT: '8px',
            xs: '6px',
        },
        colors: {
            white: 'white',
            black: 'black',
            primary: '',
            secondary: '',
            gray: {
                200: '#F6F7FA',
                300: '#f4f5f8',
                400: '#e1e3eb',
                500: '#AFAEB9',
                800: '#120F30',
                DEFAULT: '#AFAEB9',
            },
            green: {
                500: '#4E9060',
                DEFAULT: '#4E9060',
            },
            success: '#4E9060',
            red: {
                500: '#FF7882',
                DEFAULT: '#FF7882',
            },
            danger: '#FF7882',
            orange: {
                500: '#FEAD5E',
                DEFAULT: '#FEAD5E',
            },
            warning: '#FEAD5E',
            purple: {
                500: '#BD4CD4',
                DEFAULT: '#BD4CD4',
            },
        },
        fontFamily: {
            sans: ['DM Sans', 'sans-serif'],
        },
        fontSize: {
            xs: ['9px', '15px'],
            sm: ['11px', '17px'],
            base: ['14px', '24px'],
            lg: ['16px', '24px'],
            xl: ['20px', '30px'],
            '2xl': ['28px', '38px'],
        },
        boxShadow: {
            lg: '0px 0px 11px 0px RGBA(0, 0, 0, 0.03)',
            primary: '0px 6px 9px -4px RGBA(255, 116, 78, 0.6)',
            down: '0px 5px 10px -5px RGBA(0, 0, 0, 0.09)',
            DEFAULT: '0px 0px 9px 0px RGBA(3, 18, 102, 0.06)',
        },
        extend: {},
    },
    plugins: [
        plugin(function ({ addBase }) {
            addBase({
                body: {
                    fontFamily: ['DM Sans'],
                    '@apply bg-white text-base antialiased': {},
                },
                'h1, h2, h3, h4, p, ol, ul, .h1, .h2, .h3, .h4, blockquote': {
                    maxWidth: '630px',
                    '@apply mb-8': {},
                },
                'p + h1, p + h2, p + h3, p + h4': {
                    '@apply pt-8': {},
                },
                'h1, .h1': {
                    '@apply text-xl lg:text-2xl font-semibold': {},
                },
                'h2, .h2': {
                    paddingRight: '10%',
                    '@apply text-lg lg:text-xl font-semibold': {},
                },
                'h3, .h3': {
                    paddingRight: '10%',
                    '@apply text-base lg:text-lg font-semibold': {},
                },
                'h4, .h4': {
                    '@apply text-base font-semibold': {},
                },
                'main a': {},
                'main ol': {
                    listStyle: 'none',
                    counterReset: 'li',
                },
                'main ul': {
                    listStyle: 'none',
                },
                'main ol, main ul': {
                    position: 'relative',
                    paddingLeft: '35px',
                },
                'main ol>li::before': {
                    content: 'counter(li)',
                },
                'main ul>li::before': {
                    content: '"•"',
                },
                'main li::before': {},
                'main ol li': {
                    counterIncrement: 'li',
                },
                'main li': {
                    '@apply pb-4': {},
                },
                'main li *': {
                    '@apply pb-0 mb-0': {},
                },

                blockquote: {
                    '@apply pb-8': {},
                },
                '.container .container': {
                    '@apply px-0': {},
                },
            });
        }),
    ],
};
