function vailidateform()
{
	if (trim(document.ckm_form.first_name.value) == "" || trim(document.ckm_form.first_name.value) == "First Name")
	{
		alert("Enter your first name");
		document.ckm_form.first_name.value = "";
		document.ckm_form.first_name.focus();
		return false;
	}
	if (trim(document.ckm_form.last_name.value) == "" || trim(document.ckm_form.last_name.value) == "Last Name")
	{
		alert("Enter your last name");
		document.ckm_form.last_name.value = "";
		document.ckm_form.last_name.focus();
		return false;
	}
	if (trim(document.ckm_form.email_address.value) == "" || trim(document.ckm_form.email_address.value) == "Email Address")
	{
		alert("Enter email address");
		document.ckm_form.email_address.value = "";
		document.ckm_form.email_address.focus();
		return false;
	}
	if (trim(document.ckm_form.phone_home.value) == "" || trim(document.ckm_form.phone_home.value) == "Phone Number")
	{
		alert("Enter your phone number");
		document.ckm_form.phone_home.value = "";
		document.ckm_form.phone_home.focus();
		return false;
	}
	if (emailCheck(document.ckm_form.email_address.value, "Invalid Email Address") == false)
	{
		document.ckm_form.email_address.focus();
		return false;
	}
	if (trim(document.ckm_form.zip_code.value) == "" || trim(document.ckm_form.zip_code.value) == "Zip Code")
	{
		alert("Enter your zip code");
		document.ckm_form.zip_code.value = "";
		document.ckm_form.zip_code.focus();
		return false;
	}
	if (trim(document.ckm_form.state.value) == "")
	{
		alert("Select state");
		document.ckm_form.state.focus();
		return false;
	}
	if (document.ckm_form.agree_to_terms.checked == false)
	{
		alert("You must agree to our privacy policy and terms of use.");
		return false;
	}
	return true;
}

function emailCheck(emailStr, errormessage)
{
	var checkTLD=1;
	var knownDomsPat=/^(com|net|org|edu|int|mil|gov|arpa|biz|aero|name|coop|info|pro|museum)$/;
	var emailPat=/^(.+)@(.+)$/;
	var specialChars="\\(\\)><@,;:\\\\\\\"\\.\\[\\]";
	var validChars="\[^\\s" + specialChars + "\]";
	var quotedUser="(\"[^\"]*\")";
	var ipDomainPat=/^\[(\d{1,3})\.(\d{1,3})\.(\d{1,3})\.(\d{1,3})\]$/;
	var atom=validChars + '+';
	var word="(" + atom + "|" + quotedUser + ")";
	var userPat=new RegExp("^" + word + "(\\." + word + ")*$");
	var domainPat=new RegExp("^" + atom + "(\\." + atom +")*$");
	var matchArray=emailStr.match(emailPat);

	if (matchArray==null) 
	{
		alert(errormessage);
		return false;
	}
	
	var user=matchArray[1];
	var domain=matchArray[2];

	for (i=0; i<user.length; i++) 
	{
		if (user.charCodeAt(i)>127) 
		{
			alert(errormessage);
			return false;
		}
	}
	for (i=0; i<domain.length; i++) 
	{
		if (domain.charCodeAt(i)>127) 
		{
			alert(errormessage);
			return false;
   		}
	}

	if (user.match(userPat)==null) 
	{
		alert(errormessage);
		return false;
	}

	var IPArray=domain.match(ipDomainPat);
	if (IPArray!=null) 
	{
		for (var i=1;i<=4;i++) 
		{
			if (IPArray[i]>255) 
			{
				alert(errormessage);
				return false;
   			}
		}
		return true;
	}

	var atomPat=new RegExp("^" + atom + "$");
	var domArr=domain.split(".");
	var len=domArr.length;
	for (i=0;i<len;i++) 
	{
		if (domArr[i].search(atomPat)==-1) 
		{
			alert(errormessage);
			return false;
	   	}
	}

	if (checkTLD && domArr[domArr.length-1].length!=2 && domArr[domArr.length-1].search(knownDomsPat)==-1) 
	{
		alert(errormessage);
		return false;
	}

	if (len<2) 
	{
		alert(errormessage);
		return false;
	}

	return true;
}

function trim (s)
{
	return rtrim(ltrim(s));
}

function ltrim (s)
{
	return s.replace( /^\s*/, "" );
}

function rtrim (s)
{
	return s.replace( /\s*$/, "" );
}