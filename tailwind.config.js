module.exports = {
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        navy: {
          light: '#185D82',
          DEFAULT: '#014D76',
          dark: '#014265',
        },
        crimson: {
          light: '#F04254',
          DEFAULT: '#ED1B31',
          dark: '#D7192D',
        },
        bone: {
          light: '#F8F8F0',
          DEFAULT: '#E3E3DE',
          dark: '#D4D4CC',
        },
        anchor: {
          light: '#84909F',
          DEFAULT: '#6A737E',
          dark: '#5B6571',
        },
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('@tailwindcss/typography'),
    require('@tailwindcss/aspect-ratio'),
  ],
  purge: {
    content: [
      'site/templates/**/*.html',
      'site/templates/**/*.php',
      'resources/**/*.js',
      'resources/**/*.vue'
    ],
  },
}
