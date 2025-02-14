import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },

            colors: {
                primary: '#e94560',
                secondary: '#0f3460',
                light: '#f9f9f9',
                dark: '#1a1a2e',
                semidark: '#16213e',
            }
        },
    },
    plugins: [
        function ({ addComponents }) {
            addComponents ({
                '.hover-underline' : {
                    position: 'relative',
                    display: 'inline-block',
                },

                '.hover-underline::after' : {
                    content: '""',
                    position: 'absolute',
                    left: '50%',
                    bottom: 0,
                    width: '0%',
                    height: '2px',
                    backgroundColor: '#fff',
                    transition: 'all 0.5s ease',
                },

                '.hover-underline:hover::after': {
                    width: '100%',
                    left: '0%',
                },
            });
        },
    ],
};
