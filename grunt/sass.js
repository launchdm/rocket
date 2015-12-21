module.exports = {

    theme: {
        options: {
            outputStyle : 'compressed',
            sourceMap: true,
        },
        files: {
            '<%= paths.css.base %>/style.min.css':
            '<%= paths.sass.base %>/style.scss'
        }
    }
};