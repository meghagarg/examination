<?php
if(empty($_POST['submit']) || empty($_POST['bid']) || empty($_POST['tname']))
{
        ?>
<html>
<title> </title>

<h3> Fill the batch details</h3>

<body bgcolor=grey>

<form method="POST">

Batchid: <input type="text" name="bid" />
<br><br>

Trainer name : <input type="text" name="tname" />
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

