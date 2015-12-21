module.exports = {

    sass: {
        files: [
            '<%= paths.sass.base %>/**/*.scss',
        ],
        tasks: [ 'sass' ],
        options: {
            livereload: true,
        },
    },

    js: {
        files: [
            '<%= paths.js.base %>/**/*.js',
            '!<%= paths.js.base %>/**/*.min.js',
        ],
        tasks: [ 'uglify' ],
        options: {
            livereload: true,
        },
    },
};