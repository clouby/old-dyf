module.exports = function(grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        concat: {
            scss: {
                src: ['build/scss/*.scss'],
                dest: 'build/scss/build/build.scss',
            }
        },
        sass: {
            dev: {
                options: {
                    outputStyle: 'compact'
                },
                files: {
                    'build/css/main.css' : 'build/scss/build/build.scss'
                }
            },
            dist: {
                options:{
                    outputStyle:'compressed'
                },
                files: {
                    'build/css/main.css' : 'build/scss/build/build.scss'
                }
            }
        },
        autoprefixer:{
            options: {
                browsers: ['last 3 versions']
            },
            dist:{
                files:{
                    'public/dist/css/style.css':'build/css/main.css',
                }
            }
        },
        replace: {
            version: {
                src: ['app/includes/versionado.php'],
                dest: 'app/includes/versionado.php',
                replacements: [{
                    from: /^\$nVersion = ([0-9])+/igm, 
                    to: '$nVersion = ' + Date.now()
                }]
            }
        },
        watch: {
            sass: {
                files: ['build/scss/*.scss','public/dist/js/app.js'],
                tasks: ['concat', 'sass:dev', 'replace', 'autoprefixer'],
                options: {
                    livereload: true,
                }
            }
        }
    });



    grunt.loadNpmTasks('grunt-contrib-concat');
    //grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-sass');
    grunt.loadNpmTasks('grunt-autoprefixer');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-text-replace');


    grunt.registerTask('dev',['watch']);
    grunt.registerTask('default',['concat','sass:dist','replace', 'autoprefixer']);


}