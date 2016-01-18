module.exports = {

    sass: {
        files: [
            '<%= paths.styles.src %>/custom/*.scss',
            '<%= paths.styles.src %>/custom/supporting/*.scss'
        ],
        tasks: ['sass:<%= build %>']
    },
    js: {
        files: [
            '<%= paths.scripts.src %>/custom/*.js'
        ],
        tasks: ['uglify:<%= build %>']
    }
};