module.exports = {

	theme: {
		options: {
			mangle: true,
			compress: true,
			beautify: false,
			sourceMap: true,
		},
		files: {
			'<%= paths.js.base %>/javascript.min.js':
			'<%= paths.js.base %>/javascript.min.js'
		}
	}
};