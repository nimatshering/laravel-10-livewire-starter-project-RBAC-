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
      screens: {
        xs: { max: '575px' }, // Mobile (iPhone 3 - iPhone XS Max).
        sm: { min: '576px', max: '897px' }, // Mobile (matches max: iPhone 11 Pro Max landscape @ 896px).
        md: { min: '898px', max: '1199px' }, // Tablet (matches max: iPad Pro @ 1112px).
        lg: { min: '1200px' }, // Desktop smallest.
        xl: { min: '1249px' }, // Desktop wide.
        '2xl': { min: '1359px' } // Desktop widescreen.
      },
        extend: {
            fontFamily: {
            sans: ['Lato', ...defaultTheme.fontFamily.sans],
                Roboto: ['Roboto', 'sans-serif'],
                OpenSans: ['Open Sans', 'sans-serif'],
                Lato: ['Lato', 'sans-serif'],
                dzongkha: ['Jomolhari', 'serif'],
                Roboto: ['Roboto', 'serif'],
                Merriweather: ['Merriweather', 'serif'],
                Aleo: ['Aleo', 'serif'],
                Poppins: ['Poppins', 'sans-serif'],
                Ubuntu: ['Ubuntu', 'sans-serif'],
            },
        },
    },

    plugins: [
      forms, 
      typography,
      require('tailwind-clip-path'),
    ],
};
