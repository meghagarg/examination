<?php
session_start();
include 'basic.php';
$uid=$_SESSION['uid'];
 $query="select * from registration where uname='$uid'";
  $result=mysql_query($query) or die("error in query");
$row = mysql_fetch_object($result);
$name=$row->Full_name;
echo "<center><h1><font color='green'> WELCOME  ".$name."</font></h1></center>";

echo '<br><a href=addques.php>Add Questions</a>';
echo '<br><a href=managques.php> Manage Questions</a>';
echo '<br><a href=showques.php>Show Questions</a>';
echo '<br> <a href=updatstat.php>Update syllabus</a>';
echo '<br><a href=mybatlist.php>My Batches</a>';
echo '<br><a href=logout.php>Logout</a>';

?>
