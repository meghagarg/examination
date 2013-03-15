<?php
session_start();
echo "<center><h1><font color='red'> WELCOME ".$_SESSION['uid']."</font></h1></center>";

echo '<br><a href=option.php>Conduct Exam</a>';
echo '<br><a href=logout.php>Logout</a>';
?>
