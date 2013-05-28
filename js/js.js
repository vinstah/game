$(function(){
		$('#tab').tabs();
	//marquee hide and click
	/*)$('.click').click(function() {
		if( $(this).text() == "click me" ){
			$('#scroll').removeClass('hidden');
			$(this).text("turn off")
	
		}else if( $(this).text() == "turn off" ){
			$('#scroll').addClass('hidden');
			$(this).text("click me");
	
		}
	});
*/
	//prevent the form from submitting
	/*$("#schform, #playform, #loginform").submit(function(e){
		e.preventDefault();
	});
*/
	

//set up validator
		$("#schform").validate({
	
		success: function(label) {  
		
		},
		submitHandler: function(form) {
            hasValidated(form);    
                      
    },
		rules: {
			phone: {
			  required: true,
			  phone: true
			},
			clName: {
			  required:true,
			  clName: true
			},
			schName: {
				required:true,
				schName:true
			},
			city: {
				required:true,
				schName:true
			}
			
		
		}
		

    	

	});
	
$('#playform').validate({
	
		success: function(label) {  
		
		},
		submitHandler: function(form) {
          //form = $('#play')
          hasValidated(form);           
    }, 
		rules: {
			username:{
					required:true,
					username:true
				},
				login_pass:{
					required:true,
					login_pass:true
				}			
		
		}
		
});


$('#loginform').validate({
	
		success: function(label) {  
		
		},
		submitHandler: function(form) {
         
          hasValidated(form);           
    }, 
		rules: {
			username:{
					required:true,
					username:true
				},
				login_pass:{
					required:true,
					login_pass:true
				}			
		
		}
		
});
	
		/* JQUERY validate custom methods */
		
	jQuery.validator.addMethod("clName", function(value, element){
		return this.optional(element) || /^[A-Z]{2}[0-9]{2}$/.test(value);
	}, "Enter your class name in the format AA12");
	
	jQuery.validator.addMethod("phone", function(value, element) {
	// phone_number = phone_number.replace(/\s+/g, ""); 
		return this.optional(element) || /^\d{3}([\-]?)\d{2}\1\d{4}$/.test(value) || /^\d{2}([\-]?)\d{3}\1\d{4}$/.test(value);
	}, "Please specify a valid phone number");
	
	jQuery.validator.addMethod("schName", function(value, element){
		return this.optional(element) || /^[a-zA-Z0-9]{6,20}$/.test(value);
	}, "Enter at least 6 letters, max 20");
	
	jQuery.validator.addMethod("address", function(value, element){
		return this.optional(element) || /^\d{2,5}([\s]?)[a-zA-Z]{4,20}([\s]?)[a-zA-z]{2,5}$/.test(value);
	}, "Enter in the form XX Wellington Road");
	
	jQuery.validator.addMethod("city", function(value, element){
		return this.optional(element) || /^[a-zA-Z]{4,20}$/.test(value);
	}, "Enter at least 6 letters, max 20");
	
	jQuery.validator.addMethod("username", function(value, element){
		return this.optional(element) || /^[a-zA-Z0-9]{6,10}$/.test(value);
	}, "Enter at least 6 characters, max 20");	
	
	jQuery.validator.addMethod("login_pass", function(value, element){
		return this.optional(element) || /^[a-zA-Z0-9]{6,10}$/.test(value);
	}, "Enter at least 6 characters, max 20");

function hasValidated(form) {
	form.submit();
}
	
});//end jquery

/*		$('#signup').submit(function(e){
		
			e.preventDefault();
			checkclass();
			function checkclass(){
			var errors = new Array();

			//for class
			var classexp = new RegExp("^[A-Z]{2}[0-9]{2}$");	
			if( $('#class').val() != classexp ){
				//if wrong :
				errors.push('"#class"');
			}
		

			//for school email
			var email = new RegExp("^(\w+[-\.])*\w+@(\w+\.)+[A-Za-Z]+$");	
			if( $('#email').val() != email){
				errors.push('"#email"');
			}
			
			errors.forEach( function(e) {
			alert("this" + e);
			});


			}//end function
		});//end submit	
*/
