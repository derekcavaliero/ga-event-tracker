GA Event Tracker
==============

A jQuery plugin to help with Google Analytics Event tracking.

How to use:

<strong>Step 1: Include jQuery</strong>

<pre>
&lt;script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"&gt;&lt;/script&gt;
</pre>

<strong>Step 2: Install Google Analytcs</strong>

Classic Code (Replace UA-XXXXXX-X with your Google Analytics Account #)
<pre>
&lt;script&gt;
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-XXXXXX-X']);
	_gaq.push(['_trackPageview']);
	(function () {
		var ga = document.createElement('script');
		ga.type = 'text/javascript';
		ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0];
		s.parentNode.insertBefore(ga, s);
	})();
&lt;/script&gt;
</pre>

Universal Code (Replace UA-XXXXXX-X with your Google Analytics Account #)

<pre>
&lt;script&gt;
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	
	ga('create', 'UA-XXXXXX-X', 'auto');
	ga('send', 'pageview');
&lt;/script&gt;
</pre>

<strong>Step 3: Include jquery.gaeventtracker.js after Google Analyitcs</strong>

<pre>
&lt;script src="//raw.github.com/derekcavaliero/ga-event-tracker/v1.0/jquery.gaeventtracker.js"&gt;&lt;/script&gt;
</pre>

<strong>Step 4: Modify HTML for tracked items</strong>

<pre>
&lt;a href="http://www.google.com" target="_blank" class="track-it" 
    data-ga-category="Outbound Links" 
    data-ga-action="Google" 
    data-ga-label="Google Homepage" 
    data-ga-value="100" 
    data-ga-nonint="false" 
    data-ga-delay="false"&gt;google.com&lt;/a&gt;
</pre>

<strong>Step 5: Initialize a new .gaeventracker object on .ready()</strong>

<pre>
&lt;script&gt;
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
&lt;/script&gt;
</pre>
