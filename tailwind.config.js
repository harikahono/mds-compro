import preset from './vendor/filament/support/tailwind.config.preset'
import defaultTheme from 'tailwindcss/defaultTheme'
import forms from '@tailwindcss/forms'
import typography from '@tailwindcss/typography'

export default {
    content: [
        './app/Filament/**/*.php',
        './resources/views/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
        './resources/views/components/header.blade.php',
        './resources/views/components/footer.blade.php',
        './resources/views/landing.blade.php',
        './resources/views/components/sections/**/*.blade.php',
    ],
    presets: [preset],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Poppins', ...defaultTheme.fontFamily.sans],
                poppins: ['Poppins', 'sans-serif'],
            },
            colors: {
                'primary': '#0879ed',
                'secondary': '#fe975c',
                'accent-1': '#fc975c',
                'accent-2': '#75b501',
                'accent-3': '#caf291',
                'text-dark': '#000000',
                'text-light': '#ffffff',
            },
        },
    },
    plugins: [
        forms,
        typography,
    ],
}