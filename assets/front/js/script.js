function getElement(id){
	if(document.getElementById)    // test the most common method first
	{
		return document.getElementById(id);
	}
	else if(document.all)         // test older versions of IE
	{
		return document.all[id];
	}
	else if(document.layers)      // test older versions of Netscape
	{
		return document.layers[id];
	}
	else                          // not sure what to do...return null
	{
		return null;
	}
}

function validateSubscribe()
{
	//cancelPopExitS();
	var error = false;
	var error_msg = 'Please correct the following errors:\n\n';

	if(document.getElementById('subscriber_email').value == '')
	{
		error = true;
		error_msg += 'Please enter an Email Address\n';
	}
	if(document.getElementById('subscriber_firstname').value == '')
	{
		error = true;
		error_msg += 'Please enter your First Name\n';
	}
	if(document.getElementById('subscriber_lastname').value == '')
	{
		error = true;
		error_msg += 'Please enter your Last Name\n';
	}
	if(document.getElementById('custom_Password').value == '')
	{
		error = true;
		error_msg += 'Please enter a Password\n';
	}
	if(document.getElementById('chk_terms').checked == false)
	{
		error = true;
		error_msg += 'Please agree to the Terms of Service and Privacy Policy\n';
	}
	if(result.value !== "verified" &&  result.value !== "unknown" &&  result.value !== "error" )
	{
		error = true;
		error_msg += 'Please use a valid email address\n';
	}

	if(error)
	{
		alert(error_msg);
		return false;
	}

	//return true;		Commented out to include OPT INT call below.
	if ( document.getElementById('oi_main_div') != null ) {
		sendOptIns(null, true, document.forms[0]);
		return false;
	} else {
		return true;
	}
}

function validateShortSubscribe()
{
	var error = false;
	var error_msg = 'Please correct the following errors:\n\n';

	if(document.getElementById('txt_email_address').value == '')
	{
		error = true;
		error_msg += 'Please enter an Email Address\n';
	}
	if(document.getElementById('txt_password').value == '')
	{
		error = true;
		error_msg += 'Please enter a Password\n';
	}
	if(document.getElementById('chk_terms').checked == false)
	{
		error = true;
		error_msg += 'Please agree to the Terms of Service and Privacy Policy\n';
	}

	if(error)
	{
		alert(error_msg);
		return false;
	}

	//return true;		Commented out to include OPT INT call below.
	if ( document.getElementById('oi_main_div') != null ) {
		sendOptIns(null, true, document.forms[0]);
		return false;
	} else {
		return true;
	}
}

function popExit()
{
	if($('#pop_exit').val() == 1)
	{
		$('#pop_exit_url').val('/user/bonus.php');
		startPopCheck();
		return 'Special Today Only!!\n\nReceive $100 for a few minutes of your participation!\n\nClick \'Cancel\' for more details or \'OK\' to continue';
	}
}

function popExitTV()
{
	if($('#pop_exit').val() == 1)
	{
		$('#pop_exit_url').val('/index2.php');
		startPopCheck();
		return 'Special Today Only!!\n\nReceive $100 for a few minutes of your participation!\n\nClick \'Cancel\' for more details or \'OK\' to continue';
	}
}

function popExitB2(urltopop)
{
	if($('#pop_exit').val() == 1)
	{
		urltopop='/bonus2.php?u='+urltopop;
		$('#pop_exit_url').val(urltopop);
		startPopCheck();
		return 'Special Today Only!!\n\nReceive $100 for a few minutes of your participation!\n\nClick \'Cancel\' for more details or \'OK\' to continue';
	}
}


function cancelPopExit()
{
	$('#pop_exit').val(0);
}

function startPopCheck()
{
	if($('#pop_exit_url').val() != '')
	{
		location.href = $('#pop_exit_url').val();
	}
	setTimeout(startPopCheck,1000)
}

function popExitS()
{
	if($('#pop_exitS').val() == 1)
	{
		$('#pop_exit_urlS').val('/user/subscribe.php');
		startPopCheckS();
		return 'Special Offer: Sign up today and you can earn a $20 BONUS! Membership is Free!\n\n';
	}
}

function cancelPopExitS()
{
	$('#pop_exitS').val(0);
}

function startPopCheckS()
{
	if($('#pop_exit_urlS').val() != '')
	{
		location.href = $('#pop_exit_urlS').val();
	}
	setTimeout(startPopCheckS,1000)
}
function confirmationText(ID,Name) {
	var answer = confirm("Are you sure you want to skip this offer? You will not receive credit unless you complete all tasks. ")
	if (answer){
		window.location = "/user/"+ID+"?p="+Name;
	}
	else{
		alert("Please Continue to Complete Offers")
	}
}
// <a href="/user/<?php echo $vPgVal . "?p=" . ($_GET['p']+1); ?>" target="_top">

function confirmationButton(ID,Name) {
	var answer = confirm("Please make sure you complete all offers to receive credit before going to next page. Click OK to proceed or Cancel to complete more offers.")
	if (answer){
		window.location = "/user/"+ID+"?p="+Name;
	}
	else{
		alert("Please Continue to Complete Offers")
	}
}

<!-- (Use jQuery, instead). -->
function elementById( id ) {

	if (document.getElementById)
		var returnVar = document.getElementById(id);
	else if (document.all)
		var returnVar = document.all[id];
	else if (document.layers)
		var returnVar = document.layers[id];
	return returnVar;
}

function validateEmail() {

	email   = elementById("subscriber_email" );
	result  = elementById("result" );
	submit  = elementById("submit" );
	spinner = elementById("spinner");

	// Ensure LeadSpend connector is ready.
	if (typeof LeadSpend === "undefined" || typeof LeadSpend.validate === "undefined") {

		// Connector not loaded; cannot validate. Set hidden field to keep track.
		result.value = "error";

		// Accept the email address (N.B. can try validating again, later).
		submit.disabled = false;
	}
	else {

		result.value = "pending";
		submit.value = "Validating...";
		submit.disabled = true;
		spinner.style.display = "block";

		// Allow up to 10 seconds to validate the email address before giving up.
		LeadSpend.validate(email.value, 10, function(validity) {

			// Keep track of the result.
			result.value = validity.result;

			spinner.style.display = "none";
			submit.value = "Submit";
			submit.disabled = false;
		});
	}
	return false;
}

function alertResult() {

	alert( elementById("result").value );
}

function poplarge(url) {
	newwindow=window.open(url,'name','height=820,width=1000, status=0,scrollbars=1,directories=0,menubar=0,toolbar=0');
	if (window.focus) {newwindow.focus()}
	return false;
}

function checkPopandShow() {
	//Check email regardless to prevent validation error in IE
	validateEmail();
	if (elementById("subscriber_firstname").value != '')  {
		elementById("subscriber_firstname").focus();

		if(elementById("subscriber_lastname").value != '') {
			elementById("subscriber_lastname").focus();

			if(elementById("subscriber_email").value != '') {
				//Everything is populated so show Offers
				elementById("subscriber_email").focus();
				elementById("custom_Password").focus();
			}
			else elementById("subscriber_email").focus();  	//Set focus on empty
		}

		else elementById("subscriber_lastname").focus();  		//Set focus on empty field
	}
	else elementById("subscriber_firstname").focus();          //Set focus on empty field

	return;
}


