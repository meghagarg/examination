<?php
include 'basic.php';
$query="select b_no,batch_id,Full_name from batch,registration where trainer_id=r_no";
    $result= mysql_query($query)or die("error in query");
    if(mysql_num_rows($result)>0)
    {
    echo"<center><table border='10' align='center'> ";
    echo"<tr><th>Batch_id</th><th>Trainer Name</th><th>Edit</th><th>Delete</th></tr>";

    while($row=mysql_fetch_object($result))
    {
        echo"<tr>";
     echo"<td>$row->batch_id</td><td>$row->Full_name</td><td><a href='editbatch.php?b_no=$row->b_no'>edit</a></td><td><a href='deletebatch.php?b_no=$row->b_no'>delete</td></tr>";

    }
    echo"</table></center>";
    }

?>





