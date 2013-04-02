<?php
include 'basic.php';
function deletebat($bid)
{
    $query="delete from batch where b_no='$bid'";
  $result=mysql_query($query) or die("error in query");

}
$bid=$_GET['b_no'];
deletebat($bid);
echo "<script language='javascript'>window.location='showbatch.php';</script>";
?>

