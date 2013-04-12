<?php
session_start();
include 'basic.php';
$uid=$_SESSION['uid'];
      $query="select b_no,batch_id from batch,registration where trainer_id=r_no and uname='$uid' ";
           $result=mysql_query($query) or die("error in query");
   while ($row = mysql_fetch_object($result))
   {
        echo"<a href=updatexam.php?batid='$row->batch_id'>$row->batch_id</a><br><br>";
               }
           echo"</select>";



?>
