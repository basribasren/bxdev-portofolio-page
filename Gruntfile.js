module.exports = function(grunt) {
	// Do grunt-related things in here
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		copy: {
		  main: {
		    files: [
		      // includes files within path and its sub-directories
		      {
		      	expand: true,
		      	src: [
			      	'assets/basri/vendor/animate.css/animate.css'
			    ], 
		      	dest: 'assets/basri/css/',
			    flatten: true,
			    filter: 'isFile',
		      }
		    ],
		  },
		},

		sass: {
			dist: {
			    files: [{
			      expand: true,
			      cwd: 'assets/basri/sass',
			      src: [
				      'bootstrap.scss',
				      'font-awesome.scss',
				      'magnific-popup.scss',
				      'slick-carousel.scss'
				  ],
			      dest: 'assets/basri/css',
			      ext: '.css'
				}]
			}
		},

		postcss: { // Begin Post CSS Plugin
		  options: {
		    map: false,
		    processors: [
				require('autoprefixer')({
			        browsers: ['last 2 versions']
			    })
			]
		  },
		  dist: {
		    src: 'assets/basri/css/style.css'
		  }
		},

		cssmin: { // Begin CSS Minify Plugin
		  target: {
		    files: [{
		      expand: true,
		      cwd: 'assets/basri/css',
		      src: ['*.css', '!*.min.css'],
		      dest: 'assets/basri/dist/css',
		      ext: '.min.css'
			}]
		  }
		},

		concat: {
	        options: {
	            separator: ';',
	            stripBanners: true,
	             banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
	        },
	 
	        dist: {
	            src: [
		            'assets/basri/vendor/jquery/dist/jquery.js',
		            'assets/basri/vendor/bootstrap/dist/js/bootstrap.js',
		            'assets/basri/vendor/magnific-popup/dist/jquery.magnific-popup.js',
		            'assets/basri/vendor/slick-carousel/slick/slick.js',
		            'assets/basri/vendor/jquery-counterup/jquery.counterup.js',
		            'assets/basri/vendor/jquery-easing/jquery.easing.js',
		            'assets/basri/vendor/jquery-footer-reveal/jquery-footer-reveal.js',
		            'assets/basri/vendor/jquery-onepage-nav/jquery.nav.js',
		            'assets/basri/vendor/jquery-scrollup/dist/jquery.scrollUp.js',
		            'assets/basri/vendor/jquery-waypoints/lib/jquery.waypoints.js'
		        ],
	            dest: 'assets/basri/js/vendor.bundle.js'
	        }
	    },

		uglify: { // Begin JS Uglify Plugin
		  build: {
		    src: [
		    	'assets/basri/js/vendor.bundle.js'
		    ],
		    dest: 'assets/basri/dist/js/vendor.bundle.min.js'
		  }
		},

	    watch: { // Compile everything into one task with Watch Plugin
	      css: {
	        files: '**/*.scss',
	        tasks: ['sass']
	      }
	    }
	    
	});

	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-postcss');
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-copy');

	grunt.registerTask('default', [
		'copy',
		'sass',
		'cssmin',
		'concat',
		'uglify'
	]);

};