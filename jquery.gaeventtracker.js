/*!
 * jQuery Event Tracker Plugin
 * Examples and documentation at: http://www.derekcavaliero.com/jquery-event-tracker
 * Copyright (c) 2014 Derek Cavaliero
 * Version: 1.0 (31-JAN-2014)
 * Requires: jQuery v1.3.2 or later
 */
 
(function ( $ ) {

	$.fn.gaeventtracker = function( options ){
		
		var defaults = {
			'category' : 'Tracked Element',
			'action' : 'Clicked',
			'label' : location.pathname,
			'value' : 0,
			'nonint' : true,	 
			'delay' : {
				'status' : true,   
				'time' : 100			 // time for delay in milliseconds
			},
			'trigger' : 'click', // click | focus | mouseenter | change | submit | blur 
			'type' : 'classic',  // classic | universal | all
			'debug' : true       
		};
    
    var settings = $.extend( {}, defaults, options );
    
    return this.each(function() {
    		
    		var $this = $( this );
    	
	    	var nonint, delay;
	    	
	    	if( ( $this.data('ga-nonint') != undefined ) && ( $this.data('ga-nonint') != settings.nonint ) ){
	    		nonint = $this.data('ga-nonint');
	    	}else{
		    	nonint = settings.nonint;
	    	}
	    	
	    	if( ( $this.data('ga-delay') != undefined ) && ( $this.data('ga-delay') != settings.delay.status ) ){
		    	delay = $this.data('ga-delay');
	    	}else{
		    	delay = settings.delay.status;
	    	}
				
				var eventvalues = {
					'category' : $this.data('ga-category') ? $this.data('ga-category') : settings.category,
					'action' : $this.data('ga-action') ? $this.data('ga-action') : settings.action,
					'label' : $this.data('ga-label') ? $this.data('ga-label') : settings.label,
					'value' : $this.data('ga-value') ? $this.data('ga-value') : settings.value,
					'nonint' : nonint,
					'delay' : delay,
					'type' : $this.data('ga-type') ? $this.data('ga-type') : settings.type,
					'link' : $this.attr('href') ? $this.attr('href') : false,
					'trigger' : $this.data('ga-trigger') ? $this.data('ga-trigger') : settings.trigger
				}
	        
      	$this.on( eventvalues.trigger, function(e){
        	trackEvent($this, eventvalues, e);	
      	});
	        	
	                
    });
   
    
    function trackEvent(obj, eventvalues, e){			
									
			if(settings.debug == true){
			
	    	console.log(
	    		'\nTrigger Action: ' + e.type +
	    		'\nCategory: ' + eventvalues.category + 
	    		'\nAction: ' + eventvalues.action + 
	    		'\nLabel: ' + eventvalues.label  + 
	    		'\nValue: ' + eventvalues.value + 
	    		'\nNon-Interaction: ' + eventvalues.nonint + 
	    		'\nDelay: ' + eventvalues.delay + 
	    		'\nDelay Length: ' + settings.delay.time + 
	    		'\nType: ' + eventvalues.type + 
	    		'\nLink Value: ' + eventvalues.link  
	    	);
	    
	    }
      switch(eventvalues.type) {

        case 'all':
        	ga('send', 'event', eventvalues.category, eventvalues.action, eventvalues.label, eventvalues.value, {'nonInteraction': eventvalues.nonint});
        	_gaq.push(['_trackEvent', eventvalues.category, eventvalues.action, eventvalues.label, eventvalues.value, eventvalues.nonint]);
        break;

  	    case 'universal':
  		    ga('send', 'event', eventvalues.category, eventvalues.action, eventvalues.label, eventvalues.value, {'nonInteraction': eventvalues.nonint});
        break;
        
        case 'classic':
        default:
          _gaq.push(['_trackEvent', eventvalues.category, eventvalues.action, eventvalues.label, eventvalues.value, eventvalues.nonint]);
        break;
        
      }
	    
    }
    
		
	};

}(jQuery));