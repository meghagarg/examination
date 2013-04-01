<?php
include 'basic.php'; 
$query="select * from student";
    $result= mysql_query($query)or die("error in query");
    if(mysql_num_rows($result)>0)
    {
    echo"<center><table border='10' align='center'> ";
    echo"<tr><th>First Name</th><th>Last Name</th><th>Conatct</th><th>Email id</th><th> Batch id</th><th>Username</th></tr>";
   
    while($row=mysql_fetch_object($result))
    {
        echo"<tr>";
     echo"<td>$row->fname</td><td>$row->lname</td><td>$row->contact</td><td>$row->email_id</td><td>$row->batch_id</td><td>$row->uname</td></tr>";

    }
    echo"</table></center>";
    }

?>


