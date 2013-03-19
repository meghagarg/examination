<?php
session_start();
$uname=$_GET['uname'];
$passwd=$_GET['passwd'];
$utype=$_GET['utype'];
$_SESSION['uid']=$_GET['uname'];

if($uname=="a" & $passwd=="a" & $utype=="admin")
{
    echo "<script language='javascript'>window.location='adminhome.php';</script>";
}
else if ((($uname=="Anisha77329" & $passwd=="1234") || ($uname=="Neha67724" & $passwd=="1234") || ($uname=="Amit99223" & $passwd=="1234") || ($uname=="Neeraj78121" & $passwd=="1234")) & ($utype=="student"))
{
    echo "<script language='javascript'>window.location='studhome.php';</script>";
}

else if ((($uname=="megha" & $passwd=="megha") || ($uname=="manishn" & $passwd=="manishn") || ($uname=="manishs" & $passwd=="manishs")) & ($utype=="teacher"))
{
echo "<script language='javascript'>window.location='teachome.php';</script>";

}

else

    echo "<script language='javascript'>window.location='log.php?auth=12';</script>";
?>
