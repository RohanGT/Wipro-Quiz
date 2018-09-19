function formValidate ()
{
    var name = document.forms["form"]["name"];
    var regno = document.forms["form"]["regno"];
    var phone = document.forms["form"]["phone"];
    var branch = document.forms["form"]["branch"];
    var semester = document.forms["form"]["semester"];
    var email = document.forms["form"]["email"];
    var message=document.getElementById ("errorMessage");

     if (name.value == "" || /^[a-zA-Z ]*$/.test(name.value) == false)                                 
    {
        //window.alert("Please enter a valid name");
        message.innerHTML="Please enter a valid name";
        name.focus();
        return false;
    }

    if (branch.value == "" || /^[a-zA-Z ]*$/.test(branch.value) == false)                                 
    {
        window.alert("Please enter your branch.");
        branch.focus();
        return false;
    }

    if (email.value.indexOf("@", 0) < 0 || email.value.indexOf(".", 0) < 0)                
    {
        window.alert("Please enter a valid e-mail address.");
        email.focus();
        return false;
    }

    if (phone.value<1000000000 || phone.value > 9999999999)
    {
    	window.alert ("Please enter a valid phone number.");
    	phone.focus ();
    	return false;
    }
    if (phone.value<130000000 || phone.value > 190000000)
    {
    	window.alert ("Please enter a valid registration number.");
    	regno.focus ();
    	return false;
    }

    if (semester.selectedIndex < 1)
    {
    	aler ("Please select your semester.");
    	semester.focus ();
    	return false;
    }
    return true;
}	