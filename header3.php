<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
}
-->
</style>
<table border="0" width="100%" cellspacing="0" cellpadding="0" background="image/scroller.png">
  <tr>
    <td width="90%" valign="top">
<!--You can modify the text, color, size, number of loops and more on the flash header by editing the text file (fence.txt) included in the zip file.-->
<div align="center">
<a href="images/bannner.png"><img src="images/bannner.png" width="800" height="50" /></a>
</div></td>
    <td width="10%"><a href="images/logo_transparent.png"><img border="0" src="images/logo_transparent.png" width="96" height="79" align="right"></a></td>
  </tr>
</table>
<table border="0" width="100%" cellspacing="0" cellpadding="0" bgcolor="#000000" background="image/blackbar.jpg">
  <tr>
    <td width="100%" align="right"><img border="0" src="image/blackbar.jpg" width="89" height="15"></td>
  </tr>
  </Table>
  <Table width="100%">
  <tr>
  <td>
  <?php @$_SESSION['login']; 
  error_reporting(1);
  ?>
  </td>
    <td>
	<?php
	if(isset($_SESSION['login']))
	{
	 echo "<div align=\"right\"><strong><a href=\"index.php\"> Home </a>|<a href=\"signout.php\">Signout</a></strong></div>";
	 }
	 else
	 {
	 	echo "&nbsp;";
	 }
	?>
	</td>
	
  </tr>
  
</table>
