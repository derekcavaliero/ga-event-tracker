jQuery( document ).ready(function( $ ) {

  	// make code pretty
    window.prettyPrint && prettyPrint();

	debug = true;
	debugType = 'console';

	/*var iterations = 100;
	var totalTime = 0;

	for (i = 0; i < iterations; i++) {

	  var start = new Date().getTime();*/

	      $('a[target="_blank"]').each(function() {

			    $(this).gatrack({
			        'ga_type'  : 'universal',
			        'category' : 'Outbound Links',
			        'action'   : $(this).attr('href'),
			        'label'    : location.pathname,
			        'value'    : 0,
			        'nonint'   : false,
			        'delay'    : true,
			        'delay_timeout' : 100,
			        'debug'    : {
									 'status' : debug,
									 'type'	  : debugType
								 }
			    });

		    });

	  /*var end = new Date().getTime();

	  totalTime += (end - start);

	}

	console.log( 'Query finished with an average of ' + totalTime / iterations + 'ms total elapsed time of ' + totalTime + 'ms' );*/

	/* Start Demos */

    // Click Demo
    $('.track-it.click').gatrack({
        'ga_type'  : 'all',
        'category' : 'Click Fallback Category',
        'action'   : 'Click Fallback Action',
        'label'    : $(this).attr('href'),
        'value'    : 1111,
        'nonint'   : false,
        'delay'    : true,
        'delay_timeout' : 150,
        'debug'    : {
						 'status' : debug,
						 'type'	  : debugType
					 }
    });

    // Blur Demo
    $('.track-it.blur').gatrack({
        'ga_type'  : 'all',
        'trigger'  : 'blur',
        'category' : 'Blur Fallback Category',
        'action'   : 'Blur Fallback Action',
        'value'    : 3333,
        'nonint'   : true,
        'delay'    : false,
        'debug'    : {
						 'status' : debug,
						 'type'	  : 'console'
					 }
    });

    // Focus Demo
    $('.track-it.focus').gatrack({
        'ga_type'  : 'all',
        'trigger'  : 'focus',
        'category' : 'Focus Fallback Category',
        'action'   : 'Focus Fallback Action',
        'value'    : 4444,
        'nonint'   : true,
        'delay'	   : false,
        'debug'    : {
						 'status' : debug,
						 'type'	  : 'console'
					 }
    });

});