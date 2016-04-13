<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Online Quiz  - Result </title>

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


<?php include("header.php");?>
</head>

<body>

<div class="container">
<div class="panel panel-default">
  
    <div class="panel-body">
<div class="container-fluid">
<?php

include("database.php");
extract($_SESSION);
$rs=mysql_query("select t.test_name,t.total_que,r.test_date,r.score from mst_test t, mst_result r where
t.test_id=r.test_id and r.login='$login'",$cn) or die(mysql_error());

echo "<h1 align='center' style='color:black'> Result </h1>";
if(mysql_num_rows($rs)<1)
{
	echo "<br><br><h1 class='alert alert-danger' align='center'> You have not given any quiz</h1>";
	exit;
}

echo "<table align=center class='table table-hover table-bordered' width='50%' ><thead class='thead-inverse'>
<tr ><td ><h5 class='w'>Test Name <td> <h5 class='w'>Total<br><h5 class='w'> Question <td><h5 class='w'> Score <td><h5 class='w'> Percentage";
while($row=mysql_fetch_row($rs))
{
	  $aa=($row[3]*100/$row[1]);
echo "<tr class=style8><td><h5>$row[0] <td align=center><h5> $row[1] <td align=center><h5> $row[3] <td align=center><h5> $aa%";
}

echo "</table>";

?>



<h3 align="center">Your Performance evaluation</h3>
<p align="center"><img  width="800" height="650" src="graph.php" /></p>
<p align="center"><button onclick="myFunction()" >Print this page</button></p>
<script>
function myFunction() {
    window.print();
}
</script>
</div></div>
</div></div>

</body>
</html>
