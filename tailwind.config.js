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
            orange: "#F76F02",
            graywhite: "#F5F4F9",
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
        },
        gradientColorStops: {
          'blue-pink-yellow': ['#0085FF', '#FF0387', '#FDD92C'],
          'desain': ['rgba(187, 210, 197, 0.90)', '#536976 '],
          'pengembangan': ['rgba(249, 212, 35, 0.9)', 'rgba(230, 92, 0, 1) '],
          'pemasaran': ['rgba(20, 136, 204, 0.9)', 'rgba(43, 50, 178, 1) '],
          'software': ['rgba(183, 152, 145, 0.90)', '#94716B  '],
          'pengembangandiri': ['rgba(172, 187, 120, 0.90)', '#799F0C '],
          'bisnis': ['rgba(123, 67, 151, 0.90)', '#DC2430 '],
          'kuliner': ['rgba(153, 242, 200, 0.90)', '#1F4037 '],
          'musik': ['rgba(204, 204, 178, 0.90)', '#757519 ']
        },
    },
  },
  plugins: [],
}

