<?php
include 'basic.php';
if(!isset($_GET['submit']))

{
$qid=$_GET['qid'];
$query="select * from question where qid='$qid'";
$result=mysql_query($query);
while($row=mysql_fetch_object($result))
{

	$ques=$row->ques;
	$ans1=$row->ans1;
	$ans2=$row->ans2;
	$ans3=$row->ans3;
	$ans4=$row->ans4;
$cans=$row->cans;
}
?>
<html><head>
       
        <body>

            <form method="GET">

                Question<input type="text" value="<?php echo $ques;?>" name="qqname"><br>
             First answer<input type="text" value="<?php echo $ans1;?>" name="aans1"><br>
                Second answer <input type="text" value="<?php echo $ans2;?>" name="aans2"><br>
                 Third Answer <input type="text" value="<?php echo $ans3; ?>" name="aans3"><br>
                Fourth Answer <input type="text" value="<?php echo $ans4; ?>" name="aans4"><br>
                 Correct answer <input type="text" value="<?php echo $cans; ?>" name="ccans"><br>
<input type="hidden" value="<?php echo $qid;?>" name="hfid">

                       <input type="submit" name="submit" value="edit">

            </form></body>
            </html>
                <?php
                }
                else
                {
                      $id=$_GET['hfid'];

                        $qqname=$_GET['qqname'];
                        $aans1=$_GET['aans1'];
                    $aans2=$_GET['aans2'];
                    $aans3=$_GET['aans3'];
                        $aans4=$_GET['aans4'];
                        $ccans=$_GET['ccans'];
                
 $query="update question set ques='$qqname', ans1='$aans1', ans2='$aans2',ans3='$aans3',ans4='$aans4',cans='$ccans' where qid='$id'";
mysql_query($query);
echo "<script language='javascript'>window.location='showques.php';</script>";

}
                ?>
                  
