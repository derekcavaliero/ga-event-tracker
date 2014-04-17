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
    data-ga-delay="false"&gt;Google.comt&lt;/&gt;
</pre>

<strong>Step 4: Initialize a new .gaeventracker object on .ready()</strong>

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
