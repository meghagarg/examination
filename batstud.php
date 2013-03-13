<?php
if(empty($_POST['submit']))
{
?>
<html>
<title> </title>

<h3><u> <center>Type the batch for which you want to see students</u></h3>

<body >

<form method="POST">
Select Batch id:

            <select name='batid'>
           <option value='-1'>select Batch</option>
           <option value='MWF12'>MWF12</option>
           <option value='MMR44'>MMR44</option>
</select>

<br><br>
<input type="submit" name="submit" />
<br><br>
</form>
</body>
</html>
 <?php
}
else {

$batid=$_POST['batid'];
if($batid=="MWF12")
{
	echo"<center><table border='6' align='center'>";
	echo '<tr><th>First Name</th><th>Last Name</th><th>Contact</th><th>Email id</th><th>Batch Id</th><th>Username</th><th>Password</th></tr>';
	echo '<tr><td>Anisha</td><td>Anand</td><td>773299912</td><td>anisha.anand@gmail.com</td><td>MMR44</td><td>Anisha77329</td><td>1234</td><tr>';
	
	echo '<tr><td>Neha</td><td>Garg</td><td>677241342</td><td>neha.garg12@gmail.com</td><td>MMR44</td><td>Neha67724</td><td>1234</td></tr>';
	echo"</table></center>";
	
}
else 
{
	echo"<center><table border='6' align='center'>";
	echo '<tr><th>First Name</th><th>Last Name</th><th>Contact</th><th>Email id</th><th>Batch Id</th><th>Username</th><th>Password</th></tr>';
	echo '<tr><td>Amit</td><td>Kumar</td><td>992231233</td><td>amit.kumar@gmail.com</td><td>MWF12</td><td>Amit99223</td><td>1234</td></tr>';
	echo '<tr><td>Neeraj</td><td>Yadav</td><td>781213134</td><td>neerajyad12@gmail.com</td><td>MWF12</td><td>Neeraj78121</td><td>1234</td></tr>';
	echo"</table></center>";
}
}	