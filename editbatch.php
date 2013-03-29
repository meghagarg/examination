<?php
include 'basic.php';
$bid=$_GET['b_no'];
if(!isset($_GET['submit']))

{
$query="select batch_id,Full_name from batch,registration where b_no='$bid' and  trainer_id=r_no";
$result=mysql_query($query);
while($row=mysql_fetch_object($result))
{
$batch_id=$row->batch_id;
$tname=$row->Full_name;
}
?>
<html><head>
       
        <body>

            <form method="GET">

                Batch Id&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" value="<?php echo $batch_id;?>" name="bbid"><br>

Select Trainer:&nbsp;&nbsp;
            <?php
            $query1='select * from registration where type="teacher"';
            $result1=mysql_query($query1);
            echo"<select name='ttname'>";
           echo "<option value='-1'>$tname</option>";
         while ($row1 = mysql_fetch_object($result1))
               {

           echo"<option value=$row1->r_no>$row1->Full_name</option>";
               }
           echo"</select>";
?>

                       <input type="submit" name="submit" value="edit">

            </form></div></body>
            </html>
                <?php
                }
                else
                {

                	$bbid=$_GET['bbid'];
                	$ttname=$_GET['ttname'];
                
               $query="update batch set batch_id='$bbid' and tariner_id='$ttname' where b_no='$bid'";
mysql_query($query);
echo $query;
#echo "<script language='javascript'>window.location='showbatch.php';</script>";
 
                
                }
                ?>
                       
