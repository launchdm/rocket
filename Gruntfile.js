module.exports = function(grunt) {

    require('jit-grunt')(grunt)({
      customTasksDir: 'grunt'
    });
    require('load-grunt-config')(grunt, {

        data: { // Define global variables in here

            pkg: grunt.file.readJSON('package.json'),

            build: 'prod', // change for build type [dev, prod]

            paths: {
                styles: {
                    src: 'resources/sass',
                    dist: 'css'
                },
                scripts : {
                    src : 'resources/js',
                    dist: 'js'
                }
            }
        }
    });
};