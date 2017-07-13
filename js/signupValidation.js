function validateForm()

{

//  validateForm function starts here

// Validate the fill in of First Name

var x=document.forms["myForm"]["u_name"].value;

 

if (x==null || x=="")

{

alert("First name must be filled out");

return false;

}
/*
// Validate the fill in of Last Name

var x=document.forms["myForm"]["Last_Name"].value;

 

if (x==null || x=="")

{

alert("Last name must be filled out");

return false;

}
*/



// code for email validation starts here

var x=document.forms["myForm"]["u_email"].value;

var atpos=x.indexOf("@");

var dotpos=x.lastIndexOf(".");

if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)

{

alert("Not a valid e-mail address");

return false;

}

//code for email validation ends here




//code for password match starts here

var x=document.forms["myForm"]["pass"].value;

var y=document.forms["myForm"]["u_pass"].value;

var z=x.length;

if((x!=y || !x))

{

alert("Password does not match!!! Please give correct password");

return false;

}

//code for password match ends here

 

}//  validateForm function ends here
