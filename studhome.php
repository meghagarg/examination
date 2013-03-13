<?php
session_start();
echo "<center><h1><font color='red'> WELCOME ".$_SESSION['uid']."</font></h1></center>";

echo '<br><a href=addques.php>Add Questions</a>';
echo '<br><a href=managques.php> Manage Questions</a>';
echo '<br><a href=showques.php>Show Questions</a>';
echo '<br> <a href=updatstat.php>Update syllabus</a>';
?>
