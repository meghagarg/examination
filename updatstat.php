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
$_SESSION['bid']=$bid;
$query="select * from batch_status where batch_id='$bid'";
$result=mysql_query($query) or die("error in query1");
$row=mysql_fetch_object($result);
$mod1=$row->mod1;
$mod2=$row->mod2;
$mod3=$row->mod3;
$mod1=explode(",",$mod1);
$mod2=explode(",",$mod2);
$mod3=explode(",",$mod3);
?>
<form name="form2" action="check.php" method="post" >
1. Module 1
<br>
<?php
for($i=1;$i<=23;$i++)
{
if (in_array($i, $mod1)) 
echo"<input type='checkbox' name='1u$i' checked>Unit $i</input>&nbsp;&nbsp;";
else
echo"<input type='checkbox' name='1u$i'>Unit $i</input>&nbsp;&nbsp;";
}
?>
<br><br>
2. Module 2
<br>
<?php
for($i=1;$i<=18;$i++)
{
if (in_array($i, $mod2)) 
echo"<input type='checkbox' name='2u$i' checked>Unit $i</input>&nbsp;&nbsp;";
else
echo"<input type='checkbox' name='2u$i'>Unit $i</input>&nbsp;&nbsp;";
}
?>

<br><br>
3. Module 3
<br>
<?php
for($i=1;$i<=19;$i++)
{
if (in_array($i, $mod3)) 
echo"<input type='checkbox' name='3u$i' checked>Unit $i</input>&nbsp;&nbsp;";
else
echo"<input type='checkbox' name='3u$i'>Unit $i</input>&nbsp;&nbsp;";
}
?>

<br><br>
<input type=submit name="submit" value="submit">
</form>
</body>
</html>
<?php
}
?>
