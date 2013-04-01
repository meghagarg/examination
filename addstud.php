<?php
include 'basic.php';
if(empty($_POST['submit']))
{
?>
<html>
<title> </title>

<h3><u> <center>Fill student details</u></h3>

<body >

<form method="POST">

first Name: <input type="text" name="fname" />
<br><br>
Last Name: <input type="text" name="lname" />
<br><br>
Phone number : <input type="text" name="contact" />
<br><br>
Email Id : <input type="text" name="emailid" />
<br><br>
Select Batch id:
            <?php
            $query='select * from batch ';
            $result=mysql_query($query);
            echo"<select name='batid'>";
           echo "<option value='-1'>select Batch</option>";
         while ($row = mysql_fetch_object($result))
               {

           echo"<option value='$row->batch_id'>$row->batch_id</option>";
               }
           echo"</select>";
?>



<br><br>
<input type="submit" name="submit" />
<br><br>
<input type="reset" value="Reset!">
<br>
</form>
</body>
</html>

   <?php
}
else {

$fname=$_POST[fname];
$lname=$_POST[lname];
$contact=$_POST[contact];
$email=$_POST[emailid];
$batchid=$_POST[batid];
$res = substr($contact, 0, 5);
$username=$fname.$res;
$pass="1234";
$full_name=$fname.' '.$lname;
$query="insert into student(fname,lname,contact,email_id,batch_id,uname) values('$fname','$lname','$contact','$email','$batchid','$username')";
mysql_query($query);
$query1="insert into registration(uname,passwd,type,Full_name) values('$username','$pass','student','$full_name')";
mysql_query($query1);
echo "<script language='javascript'>window.location='showstud.php';</script>";

}
?>
