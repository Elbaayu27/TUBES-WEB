<?php
$koneksi=mysqli_connect("localhost","root","","tubes1");
//Define function to insert security image
function insertSecurityImage($inputname) {
$refid = md5(mktime()*rand());
$insertstr = "<img src=\"securityimage.php?refid=".$refid."\"
alt=\"Security
Image\">\n
<input type=\"hidden\" name=\"".$inputname."\"
value=\"".$refid."\">";
echo($insertstr);
}
//Define function to check security image confirmation
function checkSecurityImage($referenceid, $enteredvalue) {
$referenceid = mysql_escape_string($referenceid);
$enteredvalue = mysql_escape_string($enteredvalue);
$tempQuery = mysqli_query($koneksi, "SELECT ID FROM security_images WHERE
referenceid='".$referenceid."' AND
hiddentext='".$enteredvalue."'");
if (mysql_num_rows($tempQuery)!=0) {
return true;
} else {
return false;
}
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso8859-1">
<title>Signup Demo</title>
</head>
<body>
<?php
if (isset($HTTP_POST_VARS["name"]) &&
isset($HTTP_POST_VARS["security_try"]))
{
//Connect to database
mysql_connect("localhost", "root", "");
mysql_select_db("tubes1");
//Set variables, and call checkSecurityImage
$security_refid = $HTTP_POST_VARS["security_refid"];
$security_try = $HTTP_POST_VARS["security_try"];
$checkSecurity = checkSecurityImage($security_refid,
$security_try);
//Depending on result, tell user entered value was correct orincorrect
if ($checkSecurity) {
$validnot = "correct";
} else {
$validnot = "incorrect";
}
//Write output
echo("<b>You entered this as the security text:</b><br>\n
".$security_try."<br>\n
This is ".$validnot.".<br>\n
-------------------------------<br><br>\n
");
}
?>
<form name="signupform" method="post"
action="<?=$_SERVER["PHP_SELF"]?>">
Please sign up for our website:
<br><br>
Name:
<input name="name" type="text" id="name"><br>
<?php insertSecurityImage("security_refid") ?><br>
Enter what you see:
<input name="security_try" type="text" id="security_try"
size="20"
maxlength="10">
(can't see? try reloading page)
<br><br>
<input type="submit" name="Submit" value="Signup!">
</body>
</html>