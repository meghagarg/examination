<?php
session_start();
include 'basic.php';
$bid=$_SESSION['bid'];

#echo "Module 1 :<br>";
for ($i=1;$i<=23;$i++)
{
if($_POST["1u$i"] == "on")
{	
if(!isset($mod1))

$mod1=$i;

else

$mod1=$mod1.",".$i;
}
}

#echo "<br>Module 2 : <br>";
for ($i=1;$i<=18;$i++)
{

if($_POST["2u$i"] == "on")
	{
if(!isset($mod2))
$mod2=$i;
else
$mod2=$mod2.",".$i;
}
}


#echo "<br>Module 3 : <br>";
for ($i=1;$i<=19;$i++)
{
if($_POST["3u$i"] == "on")
	{
if(!isset($mod3))
$mod3=$i;
else
$mod3=$mod3.",".$i;
}
}
$query="update exam_module set mod1='$mod1', mod2='$mod2', mod3='$mod3' where batch_id='$bid' ";
            $result=mysql_query($query) or die("error in query");
echo "exam status updated for batch $bid";
?>
