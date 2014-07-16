jQuery( document ).ready(function( $ ) {
  
  	// make code pretty
    window.prettyPrint && prettyPrint();
   
		var debug = true;
		var debugType = 'alert';

    // Click Demo
    $('.track-it.click').gaeventtracker({           
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
			    
		// Hover Demo
    $('.track-it.hover').gaeventtracker({         
        'ga_type'  : 'all',
        'trigger'  : 'mouseenter',    
        'category' : 'Hover Fallback Category',   
        'action'   : 'Hover Fallback Action',    
        'delay'    : false, 
        'value'    : 2222,          							
        'nonint'   : true,         							
        'debug'    : {
        							 'status' : debug,
											 'type'	  : debugType
        						 }                      
    }); 
    
    // Blur Demo
    $('.track-it.blur').gaeventtracker({         
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
    $('.track-it.focus').gaeventtracker({         
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
       
    // Submit Demo
    $('form.track-it').gaeventtracker({     
        'ga_type'     : 'all',
        'trigger'  : 'submit',    
        'category' : 'Form Submit Fallback Category', 
        'action'   : 'Form Submit Fallback Action',     
        'value'    : 5555,          				
        'nonint'   : false,         			
        'delay'    : true,
        'delay_timeout' : 100,
        'debug'    : {
        							 'status' : debug,
											 'type'	  : debugType
        						 }                       
    });   
    
});