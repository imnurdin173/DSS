<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Online Quiz - Quiz List</title>







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
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
        <script src="assets/js/jquery-1.10.2.js"></script>
    <script type="text/javascript">

        $(document).ready(function(){$('#sl').show(0);$('#al').hide(0);});
		$(function() {$('#studentL').click(function(){$('#al').hide(1000);$('#sl').show(500);});});
		$(function() {$('#adminL').click(function(){$('#sl').hide(1000);$('#al').show(500);});});
		
</script>
</head>
<body bgcolor="#FFFFFF">

<br>
<div class="container">
<div class="panel panel-default">
  
    <div class="panel-body">
<div class="container-fluid">
 
  <?php
include("header.php");
include("database.php");
echo "<h2  align='center'> Select Subject to Give Quiz </h2>";
$rs=mysql_query("select * from mst_subject");
echo "<table align=center>";
while($row=mysql_fetch_row($rs))
{
	echo "<tr><td align=center ><a href=showtest.php?subid=$row[0]><font size=4>$row[1]</font></a>";
}
echo "</table>";
?>
  
  
 
  <p>Resize the browser window to see the effect.</p>
  <div class="row">
    <div class="col-sm-4" style="background-color:lavender;">
  
    <h1>&nbsp;</h1>
    <h1>COMPUTER SCIENCE</h1>
    <p><a href="sublist.php" class="btn btn-info btn-mini">Start Exam<i class="icon icon-arrow-right"></i></a></p>
    <p>&nbsp;</p>
    
    
    </div>
    <div class="col-sm-4" style="background-color:lavenderblush;">
      <p>&nbsp;</p>
      <p>ELECT ELECT</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p><a href="sublist.php" class="btn btn-info btn-mini">Start Exam<i class="icon icon-arrow-right"></i></a></p>
      <p>&nbsp;</p>
    </div>
    <div class="col-sm-4" style="background-color:lavender;">
      <p>&nbsp;</p>
      <p>COMPUTER ENGINEER</p>
      <p>&nbsp;</p>
      <p>89</p>
      <p>&nbsp;</p>
      <p><a href="sublist.php" class="btn btn-info btn-mini">Start Exam<i class="icon icon-arrow-right"></i></a></p>
      <p>&nbsp;</p>
    </div>
  </div>
</div>
</div>
</div>
</div>

</body>
</html>
