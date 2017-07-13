function loginValidateForm()

{

//  validateForm function starts here


// code for email validation starts here

var x=document.forms["loginForm"]["email"].value;

var atpos=x.indexOf("@");

var dotpos=x.lastIndexOf(".");

if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)

{

alert("Not a valid e-mail address");

return false;

}

//code for email validation ends here




//code for password match starts here

var x=document.forms["loginForm"]["pass"].value;



var z=x.length;

if((z==""))

{

alert("Please enter password");

return false;

}

//code for password match ends here

 

}//  validateForm function ends here
