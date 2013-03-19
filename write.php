<?php
$myFile = "file.txt";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = "Megha\n";
fwrite($fh, $stringData);
$stringData = "Garg\n";
fwrite($fh, $stringData);
fclose($fh);
