<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
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
<body style="background:url(assets/img/dss5.jpg) no-repeat center center fixed;
		-webkit-background-size: cover !important;
		-moz-background-size: cover !important;
		-o-background-size: cover !important;
		background-size: cover !important;
	">
		<?php
include("header.php");
include("database.php");
extract($_POST);

if(isset($submit))
{
	$rs=mysql_query("select * from mst_user where login='$loginid' and pass='$pass'");
	if(mysql_num_rows($rs)<1)
	{
		$found="N";
	}
	else
	{
		$_SESSION[login]=$loginid;
	}
}
if (isset($_SESSION[login]))
{
echo "<h1 class='style8' align=center >Welcome to Decission Support System</h1>";
echo "<br>";
		echo '<table width="28%" height="50%"  bgcolor="#FFF" border="0" align="center">
  <tr>
    <td width="7%" height="65" valign="bottom"></td>
    <td width="93%" valign="bottom" bordercolor="#0000FF"> 
	<a href="infopage.php" >
	 <button type="submit" class="btn btn-primary btn-block" id="login" name="submit">Take Exam</button>
	 </a></td>
  </tr>
  
  <tr>
    <td height="58" valign="bottom"></td>
    <td valign="bottom"> <a href="result.php" > 
	<button type="submit" class="btn btn-primary btn-block" id="login" name="submit">View Result </button></a></td>
  </tr>
  
  
 
</table>';
   
		exit;
		

}


?>
    <div id="pre-div">
        <div id="loader">
        </div>
    </div>
    <!--/. PRELOADER END -->
    
    <!--./ NAV BAR END -->
    <div id="home" >
        <div class="overlay">
            <div class="container">
				<div class="span3">
				<div class="title_index">
				<div class="row-fluid">
				</div></div>
                    <div class="col-lg-4 col-md-5">
                        <div class="div-trans text-center">
					
                            
                            <div class="col-lg-12 col-md-12 col-sm-12" >
<div id="sl">
                            <h3>Student Login</h3>
							<br>
							<br>
                           <form action="" class="form-signin" method="post" role="form">
                                <div class="form-group">
                                    <input type="text" class="form-control input-md" name="loginid" id="matric_no" placeholder="Matric no" required autofocus>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control input-md" name="pass" id="password" placeholder="Password" required>
                                </div>
								<br>
                                <div class="form-group">
										   <?php
		  if(isset($found))
		  {
		  	echo "Invalid Username or Password";
		  }
		  ?>
                                    <button type="submit" class="btn btn-primary btn-block" id="login" name="submit">Login</button>
                                </div>
                                <div class="form-group">
                                    <!--<a href="register_form.php"><i class="icon icon-badge"></i>click here to register ?</a><br/>-->
                                    <label id="adminL"  class="btn btn-mini"><i class="glyphicon glyphicon-refresh"></i>Admin's login</label>
                                    <a href="register_form.php" class="btn btn-link btn-mini"><i class="glyphicon glyphicon-user"></i>sign up ?</a><br/>
                                </div>
                                </form>
</div>
<div id="al">
                            <h3>Admin Login</h3>
							<br>
							<br>
                           <form action="admin/login.php" class="form-signin" method="post" role="form">
                                <div class="form-group">
                                    <input type="text" class="form-control input-md" name="loginid" id="username" placeholder="Username" required autofocus>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control input-md" name="pass" id="password" placeholder="Password" required>
                                </div>
								<br>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block" id="login" name="login">Login</button>
                                </div>
                                <div class="form-group">
                                <label id="studentL"  class="btn btn-mini"><i class="glyphicon glyphicon-refresh"></i>Student's login</label>
                                </div>
                                </form>
                             </div>

                        </div>
                    </div>
					
                </div>

				<br>
				<br>
				<br>
				<br>
				<br>
				<div class="row-fluid">
				<div class="col-md-6 col-md-offset-1">
				<div class="span3"><img class="index_logo img-responsive" height="500" width="700" src="assets/img/logocalc.png"></div>
						
				</div></div>
				
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				
				<div class="row-fluid">
				<div class="col-md-5 col-md-offset-1">
				<h4><span id=tick2>
				</span>&nbsp;| 
<script>
				function show2(){
				if (!document.all&&!document.getElementById)
				return
				thelement=document.getElementById? document.getElementById("tick2"): document.all.tick2
				var Digital=new Date()
				var hours=Digital.getHours()
				var minutes=Digital.getMinutes()
				var seconds=Digital.getSeconds()
				var dn="PM"
				if (hours<12)
				dn="AM"
				if (hours>12)
				hours=hours-12
				if (hours==0)
				hours=12
				if (minutes<=9)
				minutes="0"+minutes
				if (seconds<=9)
				seconds="0"+seconds
				var ctime=hours+":"+minutes+":"+seconds+" "+dn
				thelement.innerHTML=ctime
				setTimeout("show2()",1000)
				}
				window.onload=show2
				//-->
</script>
	      <?php
            $date = new DateTime();
            echo $date->format('l, F jS, Y');
          ?><h4>
            </div>
            </div>
			
			</div>
			</div>
			
        </div>


    </div>
   <div id="footser-end">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                   <center>Alrights Reserved 2015</center>
                </div>
            </div>

        </div>
    </div>
    <!--./ FOOTER SECTION END -->
    <!--  Jquery Core Script -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!--  Core Bootstrap Script -->
    <script src="assets/js/bootstrap.js"></script>
     <!--  WOW Script -->
    <script src="assets/js/wow.min.js"></script>
    <!--  Scrolling Script -->
    <script src="assets/js/jquery.easing.min.js"></script>
    <!--  PrettyPhoto Script -->
    <!--  Custom Scripts -->
    <script src="assets/js/custom.js"></script>
   
</body>
</html>
