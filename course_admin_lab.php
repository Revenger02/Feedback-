<?php session_start();

?>
<html>
<head>
<style>
#header {
    
    color:blue;
    width:100%;
   height:15%;
    padding:5px;
}

</style>
</head>
<body style="background:radial-gradient(#bfbfbf,#404040,#333333)">
<div id="header">

  <img src="logo.png" style="float:left;  height:90px;width:110px; margin-left:300px;margin-top:5px;" >
        		<!-- bhaaratiiya suchanaa praudyogikii san:sthaan guwaahaat:ii -->
                
        		<span style="font-family:hindi, &#39;Lohit Devanagari&#39;;">
                    <h2>
                       <p style="color:white; font-weight:bold; font-size:20px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;भारतीय सूचना
प्रौद्योगिकी संस्थान गुवाहाटी</p>
                    </h2>
        		</span>
			        <p style="color:white; font-weight:bold; margin-left:100px;font-size:20px;margin-top:-0.85em;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Indian Institute of Information Technology Guwahati</p><right>
			        
                     	    			    
</div><?php
$user_name = "root";
$password = "rosha";
$database = "miniproject";
$server = "127.0.0.1";

$db_handle = mysql_connect($server, $user_name, $password);

$db_found = mysql_select_db($database, $db_handle);
$i=0;
if($db_found){
$result2 = mysql_query ("SELECT * FROM lab_feedback where course_lab_id='$_SESSION[l_id]' ");

$counter = $_SESSION['count'];
while($row=mysql_fetch_row($result2))
{


if($i==$counter){ 
?>  
<center><h4>
FORM <?php echo ++$counter; ?> </h4></center>   

<div style="float:right">
<h4 style="margin-top: 10px;margin-right: 10px; color:white;"> COURSE_TITLE :: 
<?php  print "   ";echo $_SESSION["course_title"]." LAB";?><br>
<h4 style="margin-top: 10px; color:white;margin-right: 10px; text-align:right;">L-T-P-C :: 
<?php echo $_SESSION["l_credit"];?>
</h4>
</div>
<div style="float:left">
<h4 style="margin-top: 10px; color:white;"> COURSE ID:: 
<?php echo $_SESSION["l_id"]   ; ?><br>
<h4 style="margin-top: 10px; color:white;">ACADEMIC SESSION ::
<?php 
$var2=date(" Y", time());
echo $var2-1 ."-".$var2 ;    ?>
</h4>
<br>
<h4 style="margin-top: 5px; color:white;"> NAME OF INSTRUCTOR :: 
 <?php echo $_SESSION["i_name"];?></h4>
</div></div>





<table border="1" cellpadding="2" cellspacing="2"style="text-align: left; width: 100%;margin-left: auto; margin-right: auto;margin-top: 10px; color:black; background-color:#E6E6FA">
<tr style="background-color:black; color:white;">
<th>B:</th><th>ABOUT THE LAB_COMPONENT</TH><TH>selected</TH>
</tr>
</tr>
<tr><td>C.1</td><td>A detailed write-up on the lab component was provided.</td><td><?php print $row[1]; ?></td></tr>
<tr><td>C.2</td><td>The lab assignments were useful and followed the lectures.</td><td><?php print $row[2]; ?></td></tr>
<tr><td>C.3</td><td>The equipments were user friendly.</td><td><?php print $row[3]; ?></td></tr>
<tr><td>C.4</td><td>The equipments were functioning properly.</td><td><?php print $row[4]; ?></td></tr>
<tr><td>C.5</td><td>The lab session helped in clarified basic concepts taught in the lectures.</td><td><?php print $row[5]; ?></td></tr>
</tr>
</table>
<table border="1" cellpadding="2" cellspacing="2"style="text-align: left; width: 100%;margin-left: auto; margin-right: auto;margin-top: 10px; color:black; background-color:#E6E6FA">
<tr style="background-color:black; color:white;">
<th>B:</th><th>ABOUT THE LAB_COMPONENT</TH><TH>selected</TH>
</tr>
</tr><tr><td>D.1</td><td>Overall, the Lab Tutor was excellent.</td><td><?php print $row[6]; ?></td></tr>
<tr><td>D.2</td><td>The Lab Tutor was well prepared for the class.</td><td><?php print $row[7]; ?></td></tr>
<tr><td>D.3</td><td>The Lab Tutor’s instructions were clear and understandable.</td><td><?php print $row[8]; ?></td></tr>
<tr><td>D.4</td><td>Evaluation of lab sessions were done regularly & academic advices were given.</td><td><?php print $row[9]; ?></td></tr>
<tr><td>D.5</td><td>The Lab Tutor helped in clarifiying technical concepts involved in the practical work.</td><td><?php print $row[10]; ?></td></tr>
</tr>
</table>

</table>
<table border="1" cellpadding="2" cellspacing="2"style="text-align: left; width: 100%;margin-left: auto; margin-right: auto;margin-top: 20px; color:black; background-color:#E6E6FA">
<tr style="background-color:black; color:white;">
<th>B:</th><th>ABOUT THE INSTRUCTOR</TH><TH>selected</TH>
</tr>
</tr>
<tr><td>E.1</td><td>A detailed write-up on the lab component was provided.</td><td><?php print $row[1]; ?></td></tr>
<tr><td>E.2</td><td>The lab assignments were useful and followed the lectures.</td><td><?php print $row[2]; ?></td></tr>
<tr><td>E.3</td><td>The equipments were user friendly.</td><td><?php print $row[3]; ?></td></tr>
<tr><td>E.4</td><td>The equipments were functioning properly.</td><td><?php print $row[4]; ?></td></tr>
<tr><td>E.5</td><td>The lab session helped in clarified basic concepts taught in the lectures.</td><td><?php print $row[5]; ?></td></tr>
</tr>
</table>
<div style="float:left">
<h4 style="margin-top: 20px; color:white;"> NAME OF INSTRUCTOR :: 
 <?php echo$_SESSION["l_name"]; ?></h4>
 </div>
 
<<table border="1" cellpadding="2" cellspacing="2"style="text-align: left; width: 100%;margin-left: auto; margin-right: auto;margin-top: 10px; color:black; background-color:#E6E6FA">
<tr style="background-color:black; color:white;">
<th>B:</th><th>ABOUT THE INSTRUCTOR</TH><TH>selected</TH>
</tr>
</tr><tr><td>F.1</td><td>Overall, the Lab Tutor was excellent.</td><td><?php print $row[11]; ?></td></tr>
<tr><td>F.2</td><td>The Lab Tutor was well prepared for the class.</td><td><?php print $row[12]; ?></td></tr>
<tr><td>F.3</td><td>The Lab Tutor’s instructions were clear and understandable.</td><td><?php print $row[13]; ?></td></tr>
<tr><td>F.4</td><td>Evaluation of lab sessions were done regularly & academic advices were given.</td><td><?php print $row[14]; ?></td></tr>
<tr><td>F.5</td><td>The Lab Tutor helped in clarifiying technical concepts involved in the practical work.</td><td><?php print $row[15]; ?></td></tr>
</tr>
</table>
<?php
break; }
else 
$i++;
}}else{ print "SESSION EXPIRED";}
$_SESSION['count']++;
?>
<a href="selection1.php"><button>GO BACK</button></a>
<a href="course_admin_lab.php" ><button>NEXT</button></a>
<body></html>
