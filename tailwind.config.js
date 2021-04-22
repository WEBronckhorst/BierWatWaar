const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    mode: 'jit',
    purge: {
		content: [
			'./resources/views/**/*.blade.php',
		]
	},

    theme: {

        extend: {
            screens: {
                'mobiel':  '480px',
                // => @media (min-width: 640px) { ... }
                'tablet': '640px',
                // => @media (min-width: 640px) { ... }

                'laptop': '1024px',
                // => @media (min-width: 1024px) { ... }

                'desktop': '1280px',
                // => @media (min-width: 1280px) { ... }

            },
        colors: {
            transparent: 'transparent',
            current: 'currentColor',
            groen: {
              light: '#36992d',
              DEFAULT: '#3d8c36',
              dark: '#2b6226',
            },
            geel: {
              light: '#f7d455',
              DEFAULT: '#f7c407',
              dark: '#d5a908',
            },


        }}
      },




};
