 <!DOCTYPE html><?php 
 session_destroy();
ini_set('session.cache_limiter','private');
session_cache_limiter(true);
 session_start();

?>
 <html><title> Login</title>
<head><style>

#header {
    
    color:blue;
    width:100%;
   height:10%;
    padding:8px;
}
#container{
        width:100%;
        margin-left:50px;
      
        height:50%;
      padding:10px; 
    }

</style>
</head>

<body style="background:radial-gradient(#bfbfbf,#404040,#333333); background-image:url('images/12.png'); background-repeat:no-repeat;">

<div id="container">
<div  "left" style=" width:50%; float:left;" ><br><br><br><br><br><br><br><br>
<font size="6">
<h4 >LOGIN</h4></font>


<script type="text/javascript">
/*var frmvalidator = new Validator("myform");
 frmvalidator.addValidation("ln","req","Please enter your ln");
 frmvalidator.addValidation("ln","maxlen=20",
		"Max length for ln is 20");*/


function OnSubmitForm()
{

  if(document.myform.operation[0].checked == true)
  {
    document.myform.action ="admin.php";
  }
  else
  if(document.myform.operation[1].checked == true)
  {
    document.myform.action ="action_page.php";
  }
  return true;
}
</script>
<form name="myform" method="post" onsubmit="return OnSubmitForm();">
<font size="4">  Login_Id:<br>
  <input type="text" name="ln" placeholder="login_Id" required><br><br>
  Login_Password:<br></font>
  <input type="password"name="li" placeholder="login_Password" required><br><br>
  
 <br>
  <input type="radio" name="operation" value="ADMIN" required >ADMIN
   <input type="radio" name="operation" value="STUDENT" required>STUDENT
   <p>
   <input type="submit" name="submit" value="submit">
 
  <input type="reset" value="Reset"></p><br>
  </form><br><br><br><br>


  </div>
 </div>

  </body></html>


</body>
</html>
