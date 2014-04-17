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
&lt;script src="//raw.githubusercontent.com/derekcavaliero/gaeventtracker/master/jquery.gaeventtracker.js"&gt;&lt;/script&gt;
</pre>

<strong>Step 3: Modify HTML for tracked items</strong>

<pre>
&lt;a href="http://www.google.com" target="_blank" class="track-it" 
    data-ga-category="Outbound Links" 
    data-ga-action="Google" 
    data-ga-label="Google Homepage" 
    data-ga-value="100" 
    data-ga-nonint="false" 
    data-ga-delay="false"&gt;google.com&lt;/a&gt;
</pre>

<strong>Step 4: Initialize a new .gaeventracker object on .ready()</strong>

<pre>
jQuery( document ).ready(function( $ ) {

	$('.track-it').gaeventtracker({ 		// Target all elements with class "track-it"
	
  		'category' : 'Fallback Category',	// Fallback to use if data-ga-category attribute isn't set
  		'action'   : 'Fallback Action',		// Fallback to use if data-ga-action attribute isn't set
  		'label'    : 'Fallback Label',		// Fallback to use if data-ga-label attribute isn't set
  		'value'    : 1234,			// Fallback to use if data-ga-value attribute isn't set
  		'nonint'   : false,			// Fallback to use if data-ga-nonint attribute isn't set
  		'delay'    : {
  		               'status' : false 
		               }
		               
	});	
	
});
</pre>
