<?php
session_start();
$uid=$_SESSION['uid'];
if($uid=="megha")
$name="Megha Garg";
if($uid=="manishn")
$name="Manish Nautiyal";
if($uid=="manishs")
$name="Manish Saini";
echo "<center><h1><font color='green'> WELCOME ".$name."</font></h1></center>";

echo '<br><a href=addques.php>Add Questions</a>';
echo '<br><a href=managques.php> Manage Questions</a>';
echo '<br><a href=showques.php>Show Questions</a>';
echo '<br> <a href=updatstat.php>Update syllabus</a>';
echo '<br><a href=mybatlist.php>My Batches</a>';
?>
