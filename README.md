gaeventtracker
==============

A jQuery plugin to help with Google Analytics Event tracking.

How to use:

Step 1: Include jQuery

Step 2: Include jquery.gaeventtracker.js

Step 3: Create a new .gaeventracker object on .ready

<code>

	jQuery( document ).ready(function( $ ) {
	
		$('.track-it').gaeventtracker({
  			'category' : 'Fallback Category',
  			'action'   : 'Fallback Action',
  			'label'    : 'Fallback Label',
  			'value'    : 1234,
  			'nonint'   : false,
  			'delay'    : {
  			               'status' : false
			               }
		});	
		
	});

</code>
