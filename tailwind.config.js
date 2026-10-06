/** Config unica, estratta da quella identica incollata prima in ogni pagina (CDN). */
module.exports = {
  content: [
    './*.php',
    './partials/**/*.php',
    './assets/js/**/*.js',
  ],
  theme: {
    extend: {
      colors: {
        hevea: {
          red: '#C8102E',
          dark: '#9E0B22',
          brown: '#5A3A2E',
          ink: '#2A211C',
          muted: '#6B5F57',
          cream: '#FBF7F1',
          sand: '#F3EBE1',
          line: '#E7DCD0',
          green: '#2E7D52',
        },
      },
      fontFamily: {
        serif: ['Lora', 'Georgia', 'serif'],
        sans: ['Raleway', 'system-ui', 'sans-serif'],
      },
      boxShadow: {
        soft: '0 10px 30px -12px rgba(42,33,28,0.18)',
        card: '0 18px 50px -20px rgba(42,33,28,0.22)',
      },
    },
  },
  plugins: [],
};
