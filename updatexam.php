<?php
#session_start();
include 'basic.php';
$uid=$_GET['batid'];
if(empty($_GET['Submit']))
{
      ?>
<html>
<head>
<title></title>
</head>
<body>
<center>
<b>Select module-unit for exam</b>
<br><br>
<form id="form1" name="form1" method="get" >
<table width="300" border="1">
    <tr>
      <td><select name="mod1[]" size="8" multiple="multiple">
<?php
for($i=1;$i<23;$i++)
{
  echo"<option value='$i'>unit $i</option>";
}
?>     
 </td>
   <td><select name="mod2[]" size="8" multiple="multiple" >
<?php   
for($i=1;$i<18;$i++)
{
  echo"<option value='$i'>unit $i</option>";
}     
?>     
 </td>

   <td><select name="mod3[]" size="8" multiple="multiple" >
<?php   
for($i=1;$i<19;$i++)
{
  echo"<option value='$i'>unit $i</option>";
}     
?>     
 </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
<td><input type="hidden" value="<?php echo $uid;?>" name="hfid"> </td>
     <td><input type="submit" name="Submit" value="Submit"  /></td>
    </tr>
  </table></center>
</form>
</body>
</html>
<?php
}
else
{
$id=$_GET[hfid];

foreach ($_GET['mod1'] as $i)
{
if(!isset($module1))
$module1=$i;

else
$module1=$module1.",".$i;
#echo "Module 1 :-".$1."\n";
    
}
foreach ($_GET['mod2'] as $i)
{
if(!isset($module2))
$module2=$i;

else
$module2=$module2.",".$i;
 #   echo "Module 2 :-".$i."\n";
}
foreach ($_GET['mod3'] as $i)
{
if(!isset($module3))
$module3=$i;

else
$module3=$module3.",".$i;
  #  echo "Module 3 :-".$i."\n";
}
$query="update exam_module set mod1='$module1', mod2='$module2', mod3='$module3' where batch_id=$id ";
$result=mysql_query($query) or die("error in query");
#echo $query;
echo "status updated for batch $id";

}
?>

