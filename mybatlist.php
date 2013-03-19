<?php
session_start();
$uid=$_SESSION['uid'];
echo "Update module-unit for exam<br><br>";
if($uid=="megha")
{
echo "MWF12       :";
echo "<a href=upmo.php?bid=MWF12>Update module - unit </a><br>";
echo "MRF61       :";
echo "<a href=upmo.php?bid=MRF61>Update module - unit</a><br>";
}

if($uid=="manishs")
{
echo "MMT11       :";
echo "<a href=upmo.php?bid=MMT11>Update module - unit </a><br>";
}
if($uid=="manishn")
{
echo "MMR44      :";
echo "<a href=upmo.php?bid=MMR44>Update module - unit</a><br>";
}
?>
