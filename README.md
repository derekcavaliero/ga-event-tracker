gaeventtracker
==============

A jQuery plugin to help with Google Analytics Event tracking.

How to use:

<strong>Step 1: Include jQuery</strong>

<pre>
&lt;script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"&gt;&lt;/script&gt;
</pre>

<strong>Step 2: Include jquery.gaeventtracker.js</strong>

<pre>
&lt;script src="jquery.gaeventtracker.js"&gt;&lt;/script&gt;
</pre>

<strong>Step 3: Create a new .gaeventracker object on .ready()</strong>

<pre>
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
</pre>
