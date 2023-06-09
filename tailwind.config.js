import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['proxima_novaregular', ...defaultTheme.fontFamily.sans],
                proximaBold: ['proxima_novabold', ...defaultTheme.fontFamily.sans],
                saol: ['saol_displayregular', ...defaultTheme.fontFamily.serif],
            },

            colors: {
                platinum: '#E6E1DE',
                rifleGreen: '#44503A',
                deer: '#BD7D4D',
                goldenrod: '#D59F21',
            }
        },
    },

    daisyui: {
        themes: [
          {
            mytheme: {
            
                "primary": "#FFFFFF",
          
                "secondary": "#000000",
                        
                "accent": "#EEDAC7",
                        
                "neutral": "#191D24",
                        
                "base-100": "#FFFFFF",
                        
                "info": "#0e7490",
                        
                "success": "#84cc16",
                        
                "warning": "#f59e0b",
                        
                "error": "#dc2626",
            },
          },
        ],
    },

    corePlugins: {
        container: false,
    },

    plugins: [forms, typography, require("daisyui")],
};
