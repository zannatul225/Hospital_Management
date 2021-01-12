<html>
<head>
<script type="text/javascript">
function validate() {
 var name = document.forms["myform"]["name"].value;
 if(name==""){
 alert("Please enter the name");
 return false;
 }
 var email = document.forms["myform"]["email"].value;
 if(email==""){
 alert("Please enter the email");
 return false;
 }else{
 var re = /^(?:[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])$/;
 var x=re.test(email);
 if(x){
 }else{
 alert("Email id not in correct format");
 return false;
 } 
 } 
 var mobile = document.forms["myform"]["mobile"].value;
 if(mobile==""){
 alert("Please enter the mobile");
 return false;
 }else{
 if(isNaN(mobile)){
 alert("Mobile number not valid");
 return false;
 }
 } 
 var address = document.forms["myform"]["address"].value;
 if(address==""){
 alert("Please enter the address");
 return false;
 }
}
</script>
</head>
<body>
<center>
<h1>Java Script Form validation Test</h1>
<h3>Sign Up Form</h3>
<form name="myform" action="action.php" onsubmit="return validate()" method="post">
Name : <input type="text" name="name"/><br>
Email : <input type="text" name="email"/><br>
Mobile : <input type="text" name="mobile"/><br>
Address : <textarea name="address"></textarea><br>
<input type="submit" value="Submit">
</form>
</center>
</body>
</html>