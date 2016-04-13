<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Online Quiz - Test List</title>

 <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Login</title>
	<link rel="shortcut icon" href="assets/img/elogo.png">
    <!--  Bootstrap Style -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!--  Font-Awesome Style -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!--  Animation Style -->
    <link href="assets/css/animate.css" rel="stylesheet" />
    <!--  Pretty Photo Style -->
    <link href="assets/css/prettyPhoto.css" rel="stylesheet" />
    <!--  Google Font Style -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <!--  Custom Style -->
    <link href="assets/css/style.css" rel="stylesheet" />
</head>
<body>
<?php include("header.php");?>
<div class="container">
<div class="panel panel-default">
  
    <div class="panel-body">
<div class="container-fluid">

<?php

include("database.php");
extract($_GET);

$rs1=mysql_query("select * from mst_subject where sub_id='1'");
$row1=mysql_fetch_array($rs1);
echo "<h1 align=center><font color=blue> $row1[1]</font></h1>";
$rs=mysql_query("select * from mst_test where test_id='10'");
if(mysql_num_rows($rs)<1)
{
	echo "<br><br><h2 class=head1> No Quiz for this Subject </h2>";
	exit;
}

echo "<h2 align='center'> Your are expected to spend 45 minutes in this session Kindly take your time to answer the questions correctly </h2>";
"<br>";
echo "<table align=center>";

while($row=mysql_fetch_row($rs))
{
	echo "<tr><td align=center >
	<a class='btn btn-info btn-mini' href=quiz2.php?testid=$row[0]&subid=$subid>
	<font size=5>Click Here To Start $row[2]</font></a>";
	
}
echo "</table>";
?>
</div>
</div></div>
</body>
</html>
