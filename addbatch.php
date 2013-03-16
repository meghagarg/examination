<?php
if(empty($_POST['submit']) || empty($_POST['bid']) || empty($_POST['tname']))
{
        ?>
<html>
<title> </title>

<h3> Fill the batch details</h3>


<form method="POST">

Batchid: <input type="text" name="bid" />
<br><br>

Trainer name : 
<select name="tname" >
        <option value="">Select Trainer</option>
        <option value="1">Megha Garg</option>
        <option value="2">Manish Nautiyal</option>
        <option value="3">Manish Saini</option>
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

$bid=$_POST[bid];

$tname=$_POST[tname];

echo "your batch is added with batch id '$bid' and trainer name '$tname'";
}
?>

