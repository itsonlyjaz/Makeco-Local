module.exports = function(grunt) {
  var watchFiles = [
    'scss/*.scss',
    'js/*.js',
  ];
  // All configurations go here
  grunt.initConfig({

    // Reads the package.json file
    pkg: grunt.file.readJSON('package.json'),

    sass: {
      dist: {
        options: {
          style: 'compressed'
        },
        files: {
          'css/style.css': 'scss/style.scss',
        }
      }
    },
    concat: {
      options: {
        banner: '// Compiled file - any changes will be overwritten by grunt task\n',
        separator: ';',
        process: function(src, filepath) {
          return '//!!\n//!! ' + filepath + '\n' + src;
        }
      },
      dist: {
        files: {
          'js/min/scripts.js': ['js/*.js'],
        }
      },
    },
    uglify: {
      js: {
        options: {
          mangle: false,
          banner: '// Compiled file - any changes will be overwritten by grunt task\n',
        },
        files: {
          'js/min/scripts.min.js': 'js/min/scripts.js',
        }
      }
    },

    watch: {
      prod: {
        files: watchFiles,
        tasks: ['sass', 'concat', 'uglify']
      },
      dev: {
        files: watchFiles,
        tasks: ['sass', 'concat']
      },
      reload: {
        files: watchFiles,
        tasks: ['sass'],
        options: {
          livereload: true
        }
      }
    }
  });

  // Simplify the repetivite work of listing each plugin in grunt.loadNpmTasks(), just get the list from package.json and load them...
  require('matchdep').filterDev('grunt-*').forEach(grunt.loadNpmTasks);

  // Register the tasks with Grunt
  // To only watch for less changes and process without browser reload type in "grunt"
  grunt.registerTask('default', ['sass', 'concat', 'uglify', 'watch:prod']);
  // Dev mode build task
  grunt.registerTask('dev', ['sass', 'concat', 'watch:dev']);
  // To watch for less changes and process them with livereload type in "grunt reload"
  grunt.registerTask('reload', ['sass', 'watch:reload']);

};
