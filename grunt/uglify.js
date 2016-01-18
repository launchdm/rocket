module.exports = {

	dev:{
		options: {
			mangle: false,
			beautify: true
		},
		files: {
			'<%= paths.scripts.dist %>/javascript.min.js': [
				'<%= paths.scripts.src %>/vendor/**/*.js',
				'<%= paths.scripts.src %>/custom/*.js'
			]
		}
	},
	prod:{
		options: {
			mangle: true,
			beautify: false
		},
		files: {
			'<%= paths.scripts.dist %>/javascript.min.js': [
				'<%= paths.scripts.src %>/vendor/**/*.js',
				'<%= paths.scripts.src %>/custom/*.js'
			]
		}
	}
};