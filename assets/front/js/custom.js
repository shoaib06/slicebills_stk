/* 
Author : Subhash Shipu
Skype : provider.nexus@gmail.com

 */

/***************  SLIDERS  *****************/

/* START: debtSlider */
var debtSlider = document.getElementById('slider-debt');

noUiSlider.create(debtSlider, {
    start: [25000],
		connect: [true, false],
    range: {
        'min': 0,
        'max': 100000
    },
		step: 1000
});

var debtSliderValue = document.getElementById('slider-debt-value');

debtSlider.noUiSlider.on('update', function (values, handle) {
																							
		// get the next steps down and up [[handle0_down, handle0_up]
		var steps = debtSlider.noUiSlider.steps();
		var step = steps[handle];
		var step_down = step[0];
		//alert(step_down);
		var step_up = step[1];
		//alert(step_up);

		//convert from string to number
		var current_val = Number(values[handle]);
		
		//define format using wNumb library
		var moneyFormat = wNumb({
    	decimals: 0,
      thousand: ',',
      prefix: '$'
		});
				
		//lower end of range, can't go lower
		if (step_down == null) {
			
			// Format the numbers
			var lower = moneyFormat.to( current_val );
			var upper = moneyFormat.to( current_val + step_up );

  	  debtSliderValue.innerHTML = lower;

		}
		//high end of range, can't go higher
		else if (step_up == null) {
			
			// Format the numbers
			var lower = moneyFormat.to( current_val );
			var upper = moneyFormat.to( current_val + step_up );

  	  debtSliderValue.innerHTML = lower + '+';
			
		}
		else {
			
			// Format the numbers, use the upper
			//var lower = moneyFormat.to( current_val );
			//var upper = moneyFormat.to( current_val + step_up );
			var lower = moneyFormat.to( current_val - step_down );
			var upper = moneyFormat.to( current_val );

  	  debtSliderValue.innerHTML = upper;
			
		}				
		
});		
/* END: debtSlider */		
		
/***************  END SLIDERS  *****************/

		
/* progress bar / locomotion */		
$(document).ready(function(){			
													 	
	window.onhashchange = function(e) {
			//alert(e.newURL);
			//var newURL = e.newURL.split('#');
			var newURL = window.location.href.split('#'); 
			var newURL = newURL[1].replace('=', '-');
			var newURL = '#' + newURL;
			$('.step').removeClass('active');
			$(newURL).addClass('active');
			setTimeout(function(){
				progressLine();
			}, 200);                                     
	}
	function recalc(){
			var hei = 11;
			$('.quoteForm form').height();
	}
	
	
	//step calculations: dynamically assign class / id names based on the number of steps in the HTML
	$('.quoteForm .step:last').addClass('last');
	aCount = 0; //count last buy and ref columns 
	beat = 100; // start number after different colums
	ref = 0;
	buy = 0;		
	$('.quoteForm .step').each( function(index){
																			 
			if(beat == 100){
					var idADD = 'step-' + index;
					$(this).attr('id', idADD); 
			}
			else{
					var idADD = 'step-' + beat;
					$(this).attr('id', idADD);
					beat++;
			}
			total = index;// count steps
	})


	function progressLine(){
		
			var hzID = $('.step.active').attr('id');        
			var hzID = hzID.split('-');
			
			if(hzID[0] == 'step'){
					
					if((hzID[1] == '0')){
							var percent = 10;    
					}
					else{
							if($('.step.active').hasClass('last')){
									var percent = 97;        
							}
							else{		
									var figure = hzID[1];
									var figure = + figure;

									var percent = (figure / total) * 100;    
							}
					}    
			}
			
			$('#pgLine').css({'width': percent + '%'});
			$('#pgLine span').text(percent);
			
	} //end function
	
	
	// *** END: Progress bar
	
	
	//default values
	var next = false;
	
	//steps replacer
	function stepGo(next){
					
			if(next != false){
				
					next2 = next.replace('-', '=');
					location.href = next2;		
					
					$('.step').removeClass('active');
					$(next).addClass('active'); 
					
					//scroll to top of form (good for mobile environment)
					$('html,body').animate({
						scrollTop: $(".pagesLinks").offset().top},
						'slow');
					
					//set tab in first active / visible field
					//$('.active').find('input:first').focus();
					
			} //end if       
			
	} //end function
	

	//*** AUTOMATICALLY ADVANCE FORM: based on query string parameters													 													 
	//adds a paramater to an existing query string
	function updateQueryStringParameter(uri, key, value) {
		var re = new RegExp("([?&])" + key + "=.*?(&|#|$)", "i");
		if (uri.match(re)) {
			return uri.replace(re, '$1' + key + "=" + value + '$2');
		} //end if 
		else {
			var hash =  '';
			if( uri.indexOf('#') !== -1 ){
					hash = uri.replace(/.*#/, '#');
					uri = uri.replace(/#.*/, '');
			}
			var separator = uri.indexOf('?') !== -1 ? "&" : "?";    
			return uri + separator + key + "=" + value + hash;
		} //end else
	} //end function
			
	//gets a parameter from a query string
	function getParameterByName(name, url) {
		
		if (!url) url = window.location.href;
		name = name.replace(/[\[\]]/g, '\\$&');
		var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
				results = regex.exec(url);
		if (!results) return null;
		if (!results[2]) return '';
		return decodeURIComponent(results[2].replace(/\+/g, ' '));
	} //end function


	//if "debt_amount" is set, jump to the next step
	if (getParameterByName('debt_amount', window.location.href) > 0) {
		
		//set the value and advance to next step
		var sliderValue = debtSlider.noUiSlider.get();
		//alert(sliderValue);
		$('#debt_amount').val(getParameterByName('debt_amount', window.location.href));		
		var next = '#step-1';
		stepGo(next);
		
	} //end if
	//*** END: AUTOMATICALLY ADVANCE FORM: based on query string parameters

		
	// *** ICON LOCOMOTION
	$('.iconContainer .item').click(function(){
																																 
			//get the hidden input id
			var inputName = $(this).siblings('input').first().attr('id')
			//get the value clicked
			var inputValue = $(this).children('h3').first().attr('class')
			//assign it
			$('#' + inputName).val(inputValue);
			
			if($(this).hasClass('refinance') || $(this).hasClass('buying')){				
					if($(this).hasClass('refinance')){
							var next = '#stepRef-1';
							stepGo(next);          
					}else{
							var next = '#stepBuy-1';
							stepGo(next); 
					}            
			}
			else{
					var hzId = '#' + $(this).parents('.step').attr('id');
					//alert('hzId: ' + hzId);
					//var hzId = $('.active').attr('id');
					if($(hzId).hasClass('ref') || $(hzId).hasClass('buy')){
							if($(hzId).hasClass('last') != true){
									var next = $(this).parents('.step').attr('id');
									var next = next.split('-');
									var next1 = (+ next[1]) + 1;
									var next = '#' + next[0] + '-' + next1;
									stepGo(next);            
							}else{
									next = '#step-101';
									stepGo(next);
									if($(hzId).hasClass('ref')){
											intro = 'ref';    
									}else{
											intro = 'buy';
									}
							}                
					}else{
							var hzId = hzId.split('-');
							var next = hzId[0] + '-' + ( +hzId[1] + 1);
							stepGo(next);
					}            
			}                
	})


	// *** CONTINUE BUTTON LOCOMOTION
	$('.continue').click(function(e){
			e.preventDefault();		
			var continue_type = $(this).attr('id');
			//assign slider values
			if (continue_type == 'debt_check') {
				var sliderValue = debtSlider.noUiSlider.get();
				//alert(sliderValue);
				$('#debt_amount').val(sliderValue);
				//*** START: double rainbow
				/*
				//open new window with query string parameters already set
				newURL = updateQueryStringParameter(window.location.href, 'debt_amount', sliderValue);
				window.open(newURL, '_blank');							
				//re-direct current window to mortgage ranking page
				window.location.href = "https://secure.rspcdn.com/xprr/red/PID/4180/SID/d2.0";
				*/
				//*** END: double rainbow
			} //end if
			
						
			//*** VALIDATION
			//get the id of the continue button, so we can figure out what needs to be validated
			var validation_type = $(this).attr('id');
			
			var step_valid = true;
			var final_step_valid = true;
			
			//validate zip code
			/*
			if (validation_type == 'zip_check') {
				
				//non-empty, all numeric, 5 digits - /^\d{5}$/								
				filter = /^\d{5}$/;								
				if (filter.test($('#user_zip').val())) {
					
					//call google maps to pull city / state
					zipGetCityState();									
					
				} //end if
				else {

					//alert ('inside else');
					step_valid = false;									

					//show error
					$("#userZipError").html('* Enter a valid zip code');
					
				} //end else
				
			} //end if
			
			//validate address
			if (validation_type == 'address_check') {
				
				//checks for 2 words minimum, allow special characters
				filter = /[a-zA-Z0-9]+\s+[a-zA-Z]+/g;
				if (!filter.test($('#address').val())) {

					//alert ('inside else');
					step_valid = false;									

					//show error
					$("#streetError").html('* Enter a complete street address (like: "37 Wysteria Ln")');
					
				} //end if
				
				//min 2 characters (special characters allowed)
				//https://stackoverflow.com/questions/11757013/regular-expressions-for-city-name
				filter = /^([a-zA-Z\u0080-\u024F]+(?:. |-| |'))*[a-zA-Z\u0080-\u024F]{2,}$/;
				if (!filter.test($('#city').val())) {

					//alert ('inside else');
					step_valid = false;									

					//show error
					$("#cityError").html('* Enter a valid city name');
					
				} //end else if
				//non-empty, all numeric, 5 digits - /^\d{5}$/								
				filter = /^\d{5}$/;
				if (!filter.test($('#zip').val())) {

					//alert ('inside else');
					step_valid = false;									

					//show error
					$("#zipError").html('* Enter a valid zip code');
					
				} //end else if																							
				
			} //end if
			*/
			
		  if (validation_type == 'state_check') {
				if (!$('#state').val()) {
					//alert ('inside else');
					step_valid = false;									
					//show error
					$("#stateError").html('The state field is required.');
				} //end if					
				
			} //end if
			//validate first / last name
			if (validation_type == 'name_check') {
				//min 2 chars. special characters, unicode allowed (no numbers)
				filter = /^[\w'\-,.][^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]]{2,}$/;
				if (!filter.test($('#first_name').val())) {
					//alert ('inside else');
					step_valid = false;									
					//show error
					$("#firstNameError").html(' Enter your complete first name');
				} //end if					
				
				//min 2 chars. special characters, unicode allowed (no numbers)
				filter = /^[\w'\-,.][^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]]{2,}$/;								
				if ( 
							(!filter.test($('#last_name').val())) ||
							($('#last_name').val().toLowerCase() == "doe") ||
							($('#last_name').val().toLowerCase() == "cena") ||
							($('#last_name').val().toLowerCase() == "mouse") ||
							($('#last_name').val().toLowerCase() == "trump") ||	
							($('#last_name').val().toLowerCase() == "no") ||
							($('#last_name').val().toLowerCase() == "asdf") ||
							($('#last_name').val().toLowerCase() == "nunya") ||
							($('#last_name').val().toLowerCase() == "business") ||
							($('#last_name').val().toLowerCase() == "smoe") ||
							($('#last_name').val().toLowerCase() == "schmo") ||
							($('#last_name').val().toLowerCase() == "schmoe") ||							
							($('#last_name').val().toLowerCase() == "name")									
						){

					//alert ('inside else');
					step_valid = false;									

					//show error
					$("#lastNameError").html(' Enter your complete last name');
					
				} //end if								
				
				
			} //end if
			
			//validate contact details (email / phone)
			if (validation_type == 'email_check') {
				
				//http://regexlib.com/REDetails.aspx?regexp_id=599
				emailFilter = /^([0-9a-zA-Z]([-.\w]*[0-9a-zA-Z])*@(([0-9a-zA-Z])+([-\w]*[0-9a-zA-Z])*\.)+[a-zA-Z]{2,9})$/;
				if (
							(!emailFilter.test($('#email').val())) ||
							($('#email').val().toLowerCase().indexOf("spam") > 0 ) ||	
							($('#email').val().toLowerCase().indexOf("nunya") > 0 ) 										
					){

					//alert ('inside else');
					step_valid = false;			
					final_step_valid = false;
					//show error
					$("#emailError").html('Enter a valid email address');
					
				} //end if					
			} //end if
			
						//validate contact details ( / phone)
			if (validation_type == 'contact_check') {
				phoneFilter = /^(?:\([2-9]\d{2}\)\ ?|[2-9]\d{2}(?:\-?|\ ?))[2-9]\d{2}[- ]?\d{4}$/;
			 var phoneAreaCode = $('#phone').val().slice(1,4);						 
				var phoneExchange = $('#phone').val().slice(6,9);
				 var phoneLast4 = $('#phone').val().slice(-4); 
				if (
							( !phoneFilter.test($('#phone').val()) ) ||
							( phoneAreaCode == "800" ) ||	
							( phoneAreaCode == "888" ) ||	
							( phoneAreaCode == "877" ) ||	
							( phoneAreaCode == "866" ) ||	
							( phoneAreaCode == "855" ) ||	
							( phoneAreaCode == "844" ) ||	
							( phoneAreaCode == "833" ) ||
							( phoneExchange == "555" ) ||									
							( phoneLast4 == "1212" ) ||
							( phoneLast4 == "1234" ) ||
							//check to make sure the last four of phone doesn't have the same number repeated 4X consecutively
							( phoneLast4.match(/([0-9])\1{3,}/)	)																			 
				) {

						//alert ('inside else');
						step_valid = false;			
				    	final_step_valid = false;		

						//show error
						$("#phoneError").html('Enter a valid 10-digit phone (numbers only)');
						
				} //end if
				else{
				   	final_step_valid = true;	 
				}
				if ( final_step_valid == true ) { 
				
					//no more steps
					step_valid = false;			
					//disable submit to prevent duplicate submission
				//	$('#contact_check').prop('disabled', true);
					/* alert('dsfgjsdghf'); */
					var $this = $(this);
					
							
					var loadingText = '<i class="fa fa-circle-o-notch fa-spin"></i> loading...';
					if ($(this).html() !== loadingText) {
						$this.data('original-text', $(this).html());
						$this.html(loadingText);
					}
					setTimeout(function() {
						$this.html($this.data('original-text'));
					}, 5000);							
					
					//submit form
					//$('form#leadForm').submit(); 

					var data = $('form#leadForm').serialize();
					var path = "front/add_lead"
					var result = CallAjax(path,data);
					if(result.status =="success" )
					{
						var lead_id = result.lead_id;
						var base_url = $(document).find('#base_url').val();
						location.href = base_url+'front/success?lead_id='+lead_id;
					}
					else
					{
						$('.login_error').removeClass('hide');
						$('.error_msg').html(result.msg);
						setTimeout(function()
						{
							$('.login_error').addClass('hide');
						},4000)
						
					}
					
				} //end if
				
			} //end if
			if (step_valid == true) {
				//get the class of the active input
				var next = $('.active').attr('id');
				//alert('this step: ' + next);
				var next = next.split('-');
				var next1 = (+ next[1]) + 1;
				var next = '#' + next[0] + '-' + next1;
				stepGo(next);
				//have to do this to stop the continue click from firing multiple times when enter key is pressed
				//event.stopImmediatePropagation();							
			} //end if
					
	});

	//phone input mask
	//https://igorescobar.github.io/jQuery-Mask-Plugin/docs.html
	//$('#phone').mask('(000) 000-0000');	

	//remove error when re-entering input values
	$('input').keydown(function() {
		$(this).siblings('p').first().html('');
	});			
	
	//do nothing on enter key for right now
	$(document).keypress(function(e) {
		if(e.which == 13){//Enter key pressed
			e.preventDefault();														
			//$('.continue').click();//Trigger continue button click event
		}										
	});		

	//scroll to top of FAQ accordian
	$('.collapse').on('shown.bs.collapse', function(e) {
		var $card = $(this).closest('.card');
		$('html,body').animate({
			scrollTop: $card.offset().top
		}, 500);
	});	
			
});
/* END: document ready */


/* Zip code Check */
function zipGetCityState(){
    var zip;
    zip = $('input#user_zip').val();
    jQuery.ajax({
        type: 'POST',
        url: "https://maps.googleapis.com/maps/api/geocode/json?components=country:US|postal_code:" + zip +"&key=AIzaSyDAc81214Gn8dRazl1W1rRXrAWHhCqsuD0",
        success: (function(_this) {
            return function(data) {
	              //alert(JSON.stringify(data, null, 4));
				  if (data["status"] === "OK") {
                    var ic = 0;
                    var current_state = 'CA';
										var current_city = 'Los Angeles';
										var current_zip = '90011';
                    jQuery(data["results"][0]["address_components"]).each(function() {
                        if(data["results"][0]["address_components"][ic]["types"][0]=='administrative_area_level_1'){
                            current_state = data["results"][0]["address_components"][ic]["short_name"];
                        };
												if(data["results"][0]["address_components"][ic]["types"][0]=='locality'){
                            current_city = data["results"][0]["address_components"][ic]["short_name"];
                        };
												if(data["results"][0]["address_components"][ic]["types"][0]=='postal_code'){
                            current_zip = data["results"][0]["address_components"][ic]["short_name"];
                        };
                        ic++;
                    });
										$('#city').val(current_city);
                    $("#state option[value="+current_state+"]").prop('selected', true);
										$('#zip').val(current_zip);
                    //getInputValueZip();
                }
            };
        })(this)
    });
}