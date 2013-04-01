<?php
include 'basic.php';
$sid=$_GET['sid'];

if(!isset($_GET['submit']))
{
$query="select * from student where sid='$sid'";
$result=mysql_query($query);
while($row=mysql_fetch_object($result))
{
$fname=$row->fname;
$lname=$row->lname;
$contact=$row->contact;
$email=$row->email_id;
$batch_id=$row->batch_id;
}

?>
<html><head>
       
        <body>

            <form method="GET">

                First name<input type="text" value="<?php echo $fname;?>" name="ffname"><br>
             Last name<input type="text" value="<?php echo $lname;?>" name="llname"><br>
                Contact <input type="text" value="<?php echo $contact;?>" name="ccontact"><br>
                 Email id <input type="text" value="<?php echo $email; ?>" name="eemail"><br>                 
select Batch id:
            <?php
            $query='select * from batch ';
            $result=mysql_query($query);
            echo"<select name='batid'>";
           echo "<option value='$batch_id'>$batch_id</option>";
         while ($row = mysql_fetch_object($result))
               {

           echo"<option value='$row->batch_id'>$row->batch_id</option>";
               }
           echo"</select>";
?>
<input type="hidden" value="<?php echo $sid;?>" name="hfid">

                       <input type="submit" name="submit" value="edit">

            </form></body>
            </html>
                <?php
                }
                else
                {
                      $id=$_GET['hfid'];
                	$ffname=$_GET['ffname'];
                	$llname=$_GET['llname'];
                    $ccontact=$_GET['ccontact'];
                    $eemail=$_GET['eemail'];
                	$bbatid=$_GET['batid'];
               $query="update student set fname='$ffname', lname='$llname', contact='$ccontact',email_id='$eemail',batch_id='$bbatid' where sid='$id'";
mysql_query($query);
echo "<script language='javascript'>window.location='showstud.php';</script>";                
}
                ?>
                   
