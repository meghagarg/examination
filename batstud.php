<?php
include 'basic.php';
if(empty($_POST['submit']))
{
?>
<html>
<title> </title>

<h3><u> <center>Type the batch for which you want to see students</u></h3>

<body >

<form method="POST">
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
</form>
</body>
</html>
 <?php
}
else {

$batid=$_POST['batid'];
$query="select * from student where batch_id='$batid'";
    $result= mysql_query($query)or die("error in query");
    if(mysql_num_rows($result)>0)
    {
    echo"<center><table border='10' align='center'> ";
    echo"<tr><th>First Name</th><th>Last Name</th><th>Conatct</th><th>Email id</th><th> Batch id</th><th>Username</th></tr>";

    while($row=mysql_fetch_object($result))
    {
        echo"<tr>";
     echo"<td>$row->fname</td><td>$row->lname</td><td>$row->contact</td><td>$row->email_id</td><td>$row->batch_id</td><td>$row->uname</td></tr>";

    }
    echo"</table></center>";
    }
	
}
?>
