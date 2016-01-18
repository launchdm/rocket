module.exports = {

    dev: {
        options: {
            outputStyle: 'expanded',
            sourceMap: true
        },
        files: {
            '<%= paths.styles.dist %>/styles.min.css': '<%= paths.styles.src %>/custom/styles.scss'
        }
    },
    prod: {
        options: {
            outputStyle: 'compressed',
            sourceMap: true
        },
        files: {
            '<%= paths.styles.dist %>/styles.min.css': '<%= paths.styles.src %>/custom/styles.scss'
        }
    }
};