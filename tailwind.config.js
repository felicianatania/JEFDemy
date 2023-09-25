/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
        colors:{
            lightblue: '#CBD6F6',
            maincolor: '#879EEB',
            whiteblue: '#EEF1FC',
            darkblue: '#587AE4',
            llightblue: '#DDE3F9',
            darkdarkblue: '#4F69B9',
            black: '#222222',
            blackgray: '#333',
            green: '#00CC00',
            red: '#CC0000',
        },
        fontFamily: {
            sans: ['Poppins', 'sans-serif'],
        },
        fontSize: {
            headline: '3rem',
            title: '1.875rem',
            heading: '1.3125rem',
            subheading: '1.125rem',
            name: '1rem',
            subname: '0.875rem',
            light: '0.8rem',
        },
        borderRadius: {
            'default': '5px',
        }
    },
  },
  plugins: [],
}

