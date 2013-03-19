<?php
$username="megha";
$batchid="bbid";
$myFile = "file.txt";
$fh = fopen($myFile, 'a') or die("can't open file");
$uname=$username."-";
fwrite($fh, $uname);
fwrite($fh, $batchid);
fclose($fh);
?>

