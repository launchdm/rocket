 module.exports = function(grunt) {

    require('time-grunt')(grunt); // Need to require
    require('load-grunt-tasks')(grunt); // Load tasks automatically

    require('load-grunt-config')(grunt, {

        data: { // Define global variables in here

            pkg: grunt.file.readJSON('package.json'),

            paths: {

                js : {
                    base : 'js',
                },

                css : {
                    base: 'css',
                },

                sass : {
                    base: 'css/sass'
                },
            },
        }
    });
};
