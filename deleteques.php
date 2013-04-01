<?php
include 'basic.php';
function deleteques($qid)
{
    $query="delete from question where qid='$qid'";
  $result=mysql_query($query) or die("error in query");

}
$qid=$_GET['qid'];
deleteques($qid);
echo "<script language='javascript'>window.location='showques.php';</script>";
?>

