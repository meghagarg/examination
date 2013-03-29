<?php
include 'basic.php';
if(empty($_POST['submit']) || empty($_POST['bid']) || empty($_POST['tname']))
{
        ?>
<html>
<title> </title>

<h3> Fill the batch details</h3>


<form method="POST">

Batchid: <input type="text" name="bid" />
<br><br>
Select Trainer:&nbsp;&nbsp;
            <?php
            $query='select * from registration where type="teacher"';
            $result=mysql_query($query);
            echo"<select name='tname'>";
           echo "<option value='-1'>select Trainer</option>";
         while ($row = mysql_fetch_object($result))
               {

           echo"<option value='$row->r_no'>$row->Full_name</option>";
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

$bid=$_POST[bid];

$tname=$_POST[tname];
$query="insert into batch(batch_id,trainer_id) values ('$bid','$tname')";
    $result=mysql_query($query) or die("error in query");
    echo"your record added $result";

#echo "your batch is added with batch id '$bid' and trainer name '$tname'";
}
?>

