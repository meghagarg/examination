<?php
include 'basic.php';
function deletestud($sid)
{
    $query="delete from student where sid='$sid'";
  $result=mysql_query($query) or die("error in query");

}
$sid=$_GET['sid'];
deletestud($sid);
echo "<script language='javascript'>window.location='showstud.php';</script>";
?>

