module.exports = {
	mode: "jit",
	purge: {
		enabled: true,
		content: ["./*.php", "./**/*.php"]
	},
	darkMode: false, // or 'media' or 'class'
	theme: {
		extend: {},
		fontFamily: {
			sans: ["Montserrat", "sans-serif"],
			cursive: ["Yeseva One", "cursive"]
		}
	},
	variants: {
		extend: {}
	},
	plugins: []
};
