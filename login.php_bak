<?php
session_start();
 $uname=$_GET['uname'];
 $passwd=$_GET['passwd'];
 $utype=$_GET['utype'];
$_SESSION['uid']=$_GET['uname'];

if($uname=="a" & $passwd=="a")
{
if($utype=="student")
{

    echo "<script language='javascript'>window.location='studhome.php';</script>";
}
else if($utype=="teacher")
{
    echo "<script language='javascript'>window.location='teachome.php';</script>";
}
else if($utype=="admin")
{
    echo "<script language='javascript'>window.location='adminhome.php';</script>";
}
else

        echo "<script language='javascript'>window.location='log.php?auth=12';</script>";

}
else

    echo "<script language='javascript'>window.location='log.php?auth=12';</script>";

