<?php
session_start();
include 'basic.php';

$uname=$_GET['uname'];
$passwd=$_GET['passwd'];
#$utype=$_GET['utype'];
$_SESSION['uid']=$_GET['uname'];

$query = "select type from registration where uname='$uname' and passwd='$passwd'";
$result=mysql_query($query) or die("error");

while ($row = mysql_fetch_object($result)) 
{

if($row->type=="admin")
{
    echo "<script language='javascript'>window.location='adminhome.php';</script>";
}
else if ($row->type=="student")
{
    echo "<script language='javascript'>window.location='studhome.php';</script>";
}

else if ($row->type=="teacher")
{
echo "<script language='javascript'>window.location='teachome.php';</script>";

}

else

    echo "<script language='javascript'>window.location='log.php?auth=12';</script>";

}
?>
