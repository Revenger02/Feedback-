	<!DOCTYPE html>
<?php
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
 session_start(); 
?>
<html>
<head><title> Courses Enrolled</title>
 
</head>
<body style="background:radial-gradient(#bfbfbf,#404040,#333333);background-image:url('images/11.png'); background-repeat:no-repeat; ">
<div style="float:left; margin-left:40px; position:absolute; left:0; top:50%;" id ="t">

<?php

$user_name = "root";
$password = "rosha";
$database = "miniproject";
$server = "127.0.0.1";

$db_handle = mysql_connect($server, $user_name, $password);

$db_found = mysql_select_db($database, $db_handle);

$var=array("Name:", "Sem:", "Department:");
if((isset($_POST["ln"]))&& (isset($_POST["li"]))&&(isset($_POST["operation"]))){
$_SESSION["lname"]=$_POST["ln"];
$_SESSION["l_id"]=$_POST["li"];
$_SESSION["op"]=$_POST["operation"];
}
if ($db_found) {
if($_SESSION["op"]=="STUDENT")
{
$result1 = mysql_query ("SELECT login_name,login_id FROM login_credential where login_name='$_SESSION[lname]' and login_id='$_SESSION[l_id]' ");
if(mysql_fetch_row($result1) )
{$result = mysql_query ("select name,sem,dept from student where id = '$_SESSION[lname]' ");
while ($row = mysql_fetch_row($result)){
    
    $_SESSION["sem"]=$row[1];
    $i=0;
    foreach ($row as $field) {
      print "<h3 >$var[$i]  $field</h3>";
      $i++;}}
     ?></div> 

<div  style="  position:absolute; right:20%; top:10%;"><br#6><br><br><br><br><br><br><h3  fontsize="6">
&nbsp;&nbsp;&nbsp;</h3><?php
$result = mysql_query ("SELECT enroll,counter FROM login_credential where login_name='$_SESSION[lname]' and login_id='$_SESSION[l_id]' ");
while ($field = mysql_fetch_row($result)){


       $pieces = explode(",", $field[0]);
       $cpieces = explode(",", $field[1]);
   
for($i=0;$i<count($pieces);$i++)
{
 if($cpieces[$i]=='0') 
{

?>
<form  action="selection.php" method="post" ><br>
  <input type="radio" name="subject" value="<?php  print $pieces[$i] ; ?>"> <font size="4" > <?php  print $pieces[$i]; ?></font> <br>

<?php
}}?>
    <br> &nbsp;&nbsp;<button type="submit"style="color:lightcyan;position:absolute; right:0;bottom:0;  background-color:lightslategray;border:0px; border-radius:50px ; box-shadow: 0 10px #27496d;">FEEDBACK</button><br>
     </form><br>
  <?php  }
  
    print "";
 }
 }
 else {
 ?>
 <h4>some error in performance</h4>
  
 <?php
 }}
 
 
 else {

print "Database NOT Found ";

}

mysql_close($db_handle);
?>

</div></div>
<a href='login.php'><button style="color:lightcyan;background-color:lightslategray;position:absolute;right:0%;top:5%;border:0px;border-radius:50px;box-shadow:0 10px #27496d;width: 5%; height:5%;"><font size=3 style='color:white; '>Logout</button></a>
<!--<div id="section2">hjkkjkj</div>-->
</body></html>
