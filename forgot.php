<?php session_start() ?>
<html>
<head>
    <style>
    body, html {
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
        background-color: chartreuse;
}

* {
  box-sizing: border-box;
}        
.container {
  position: absolute;
  right:600px;
  margin: 30px;
  max-width:300px;
 max-height:650px;
  padding: 20px;
  background-color: white;
    bottom: 130px;
}
        .btn {
  background-color: lawngreen;
  color: white;
  padding: 10px 10px;
  border: none;
  cursor: pointer;
  width: 150px;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
        .capbox {
	background-color: #92D433;
	border: #B3E272 0px solid;
	border-width: 0px 12px 0px 0px;
	display: inline-block;
	*display: inline; zoom: 1; /* FOR IE7-8 */
	padding: 8px 40px 8px 8px;
	}

.capbox-inner {
	font: bold 11px arial, sans-serif;
	color: #000000;
	background-color: #DBF3BA;
	margin: 5px auto 0px auto;
	padding: 3px;
	-moz-border-radius: 4px;
	-webkit-border-radius: 4px;
	border-radius: 4px;
	}

#CaptchaDiv {
	font: bold 17px verdana, arial, sans-serif;
	font-style: italic;
	color: #000000;
	background-color: #FFFFFF;
	padding: 4px;
	-moz-border-radius: 4px;
	-webkit-border-radius: 4px;
	border-radius: 4px;
	}

#CaptchaInput { margin: 1px 0px 1px 0px; width: 135px; }
    </style>
    
    <title>Forgot Password?</title></head>
          
    <body>    
  <form action="forgot2.php" class="container"  onsubmit="return checkform(this);">
    <h3>Forgot password?</h3>
      <h4> You will get notify with your email for reset the password</h4>

    
      <label for="email"><b>Email</b></label><br>
    <input type="text" placeholder="Enter Email" name="email" required><br><br>
    
    <div class="capbox">

<div id="CaptchaDiv"></div>

<div class="capbox-inner">
Type the above number:<br>

<input type="hidden" id="txtCaptcha">
<input type="text" name="CaptchaInput" id="CaptchaInput" size="15"><br><br>
    <input type="submit" value="Test capcha">
    
    

</div>
</div><br><br>
    
      <input class="btn" type="submit" value="Reset your password" name="forgot">
  </form>
        <script type="text/javascript">

// Captcha Script

function checkform(theform){
var why = "";

if(theform.CaptchaInput.value == ""){
why += "- Please Enter CAPTCHA Code.\n";
}
if(theform.CaptchaInput.value != ""){
if(ValidCaptcha(theform.CaptchaInput.value) == false){
why += "- The CAPTCHA Code Does Not Match.\n";
}
}
if(why != ""){
alert(why);
return false;
}
}

var a = Math.ceil(Math.random() * 9)+ '';
var b = Math.ceil(Math.random() * 9)+ '';
var c = Math.ceil(Math.random() * 9)+ '';
var d = Math.ceil(Math.random() * 9)+ '';
var e = Math.ceil(Math.random() * 9)+ '';

var code = a + b + c + d + e;
document.getElementById("txtCaptcha").value = code;
document.getElementById("CaptchaDiv").innerHTML = code;

// Validate input against the generated number
function ValidCaptcha(){
var str1 = removeSpaces(document.getElementById('txtCaptcha').value);
var str2 = removeSpaces(document.getElementById('CaptchaInput').value);
if (str1 == str2){
return true;
}else{
return false;
}
}

// Remove the spaces from the entered and generated code
function removeSpaces(string){
return string.split(' ').join('');
}
</script>
        
<?php
if(isset($_SESSION[‘msg’]))
{
echo $_SESSION[‘msg’];
unset($_SESSION[‘msg’]);
}
?>
        
    
    
    </body>
    
    

</html>