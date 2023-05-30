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
                sans: ['Adamina', ...defaultTheme.fontFamily.sans],
                poppins: ['Poppins', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    daisyui: {
        themes: [
          {
            mytheme: {
            
                "primary": "#F2F2F2",
          
                "secondary": "#000000",
                        
                "accent": "#4d7c0f",
                        
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
