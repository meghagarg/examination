<?php
#session_start();
#$searchbat = $_SESSION['uid'];
$searchbat="kunal77712";
include 'basic.php';

$query="select mod1,mod2,mod3 from exam_module,student where student.batch_id =exam_module.batch_id and student.uname='$searchbat'";
echo $query;
$result=mysql_query($query);
$row=mysql_fetch_object($result);

$module1=$row->mod1;
$module2=$row->mod2;
$module3=$row->mod3;

#$module1=explode(',',$module1);
#$module2=explode(',',$module2);
#$module3=explode(',',$module3);

if(!empty($module1))
$module1=explode(",",$module1);
#foreach($module1 as $i)
#do 
#$a="(module=1 and (unit=
echo "not set mod1";

if(!empty($module2))
$module2=explode(",",$module2);
echo"not set mod2";

if(!empty($module3))
$modu3e1=explode(",",$module3);
echo"not set mod3";

