<?php
 $module=$_GET['module'];
?>
<select name="unit" onChange="showquestion(this.value,'<?php echo $module;?>')" >
<option>Select unit</option>
<?php
if($module==1)
{
for($i=1;$i<=23;$i++)
{
echo "<option value='unit$i'>unit$i</option>";
 }
}
else if($module==2)
{
        for($i=1;$i<=18;$i++)
        {
                echo "<option value='unit$i'>unit$i</option>";
}
}

else if($module==3)
{
        for($i=1;$i<=19;$i++)
        {
                echo "<option value='unit$i'>unit$i</option>";
}
}


 ?>

</select>
