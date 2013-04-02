<?php
include 'basic.php';
$query="select name from test";
$result=mysql_query($query);
$row=mysql_fetch_object($result);
echo $row->name;
