<?php
session_start();
?>
<?php
include("./phpgraphlib.php");
extract($_SESSION);
$graph=new PHPGraphLib(800,650); 

$link = mysql_connect('localhost', 'root', '')
   or die('Could not connect: ' . mysql_error());
     
mysql_select_db('dss') or die('Could not select database');
  
$dataArray=array();
/*  
//get data from database
$sql=mysql_query("SELECT * FROM mst_result")or die( mysql_error());
while($result=mysql_fetch_array($sql))
{
      $salesgroup=$result["login"];
      $count=$result["score"];
      //add to data areray
      $dataArray[$salesgroup]=$count;
 }

  */
  
 /* $sql="SELECT login, COUNT(*) AS 'count' FROM  mst_result GROUP BY login";
$result = mysql_query($sql) or die('Query failed: ' . mysql_error());
if ($result) {
  while ($row = mysql_fetch_assoc($result)) {
      $salesgroup=$row["login"];
      $count=$row["count"];
      //add to data areray
      $dataArray[$salesgroup]=$count;
  }
  }
  
  
  
  
  */
  
  
  $sql=mysql_query("select t.test_name,t.total_que,r.test_date,r.score from mst_test t, mst_result r where
t.test_id=r.test_id and r.login='$login'")or die( mysql_error());
while($result=mysql_fetch_array($sql))
{
      $salesgroup=$result['0'];
	  $total=$result['1'];
      $count=$result['3'];
	  $aa=($count*100/$total);
      //add to data areray
      $dataArray[$salesgroup]=$aa;
 }

  
//configure graph
$graph->addData($dataArray);
$graph->setTitle("Performance Evaluation");
$graph->setGradient("lime", "green");
$graph->setBarOutlineColor("black");
$graph->createGraph();
?>