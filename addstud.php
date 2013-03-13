<?php
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

            <select name='batid'>
           <option value='-1'>select Batch</option>
           <option value='MWF12'>MWF12</option>
           <option value='MMR44'>MMR44</option>
</select>


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
echo "Student is added with information ";
echo "<br>First name :-$fname";
echo "<br>Last Name : - $lname";
echo "<br>Contact :- $contact";
echo "<br>Email id :- $email";
echo "<br>Batch id : - $batchid";
echo "<br>Username : - $username";
echo "<br>password : - $pass";
}
?>
