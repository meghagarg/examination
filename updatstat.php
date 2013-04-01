<?php
session_start();
include 'basic.php';
$uid=$_SESSION['uid'];
if(empty($_POST['submit']) || empty($_POST['bid']))
{
        ?>
<html>
<title></title>
<body>
<h3> Select the batch for which you want to update syllabus</h3>

<form name="form1" method="post" >
Select Batch id:
            <?php
            $query="select b_no,batch_id from batch,registration where trainer_id=r_no and uname='$uid' ";
            $result=mysql_query($query) or die("error in query");
            echo"<select name='bid'>";
           echo "<option value='-1'>select Batch</option>";
         while ($row = mysql_fetch_object($result))
               {

           echo"<option value='$row->batch_id'>$row->batch_id</option>";
               }
           echo"</select>";
?>
  
<br><br>
<input type="submit" name="submit" />
    </form>

   <?php
}
else {
$bid=$_POST[bid];
?>
<form name="form2" action="check.php" method="post" >
<?php 
if($bid=="1")
{
?>
1. Module 1
<br>
<input type="checkbox" name="1u1">Unit1</input>
<input type="checkbox" name="1u2"  checked>Unit2</input>
<br><br>
2. Module 2
<br>
<input type="checkbox" name="2u1"  checked>Unit1</input>
<input type="checkbox" name="2u2" >Unit2</input>
<input type="checkbox" name="2u3"  checked>Unit3</input>
<input type="checkbox" name="2u4" >Unit4</input>
<br><br>
3. Module 3
<br>
<input type="checkbox" name="3u1" >Unit1</input>
<input type="checkbox" name="3u2"  checked>Unit2</input>
<input type="checkbox" name="3u3" >Unit3</input>
<br>
<?php 
}
else if($bid=="2")
{
	?>
	<br>
	1. Module 1
	<br><input type="checkbox" name="1u1" >Unit1</input>
	<input type="checkbox" name="1u2" checked >Unit2</input>
	<br><br>
	2. Module 2
	<br>
	<input type="checkbox" name="2u1" >Unit1</input>
	<input type="checkbox" name="2u2" checked>Unit2</input>
	<input type="checkbox" name="2u3" checked>Unit3</input>
	<input type="checkbox" name="2u4" >Unit4</input>
	<br><br>
	3. Module 3
	<br>
	<input type="checkbox" name="3u1" checked>Unit1</input>
	<input type="checkbox" name="3u2" >Unit2</input>
	<input type="checkbox" name="3u3" >Unit3</input>
	<br>
	<?php 
	}

else if($bid=="3")
{
	?>
	1. Module 1
	<input type="checkbox" name="1u1" checked>Unit1</input>
	<input type="checkbox" name="1u2" checked>Unit2</input>
	<br><br>
	2. Module 2
	<input type="checkbox" name="2u1" checked>Unit1</input>
	<input type="checkbox" name="2u2" >Unit2</input>
	<input type="checkbox" name="2u3" >Unit3</input>
	<input type="checkbox" name="2u4" checked>Unit4</input>
	<br><br>
	3. Module 3
	<input type="checkbox" name="3u1" >Unit1</input>
	<input type="checkbox" name="3u2" checked>Unit2</input>
	<input type="checkbox" name="3u3" >Unit3</input>
	<br>
	<?php 
	}

?>
<br>
<input type=submit name="submit" value="submit">
</form>
</body>
</html>
<?php
}
?>
