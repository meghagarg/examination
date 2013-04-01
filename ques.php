<?php
$module=$_GET['module'];
$unit=$_GET['unit'];
include 'basic.php';
$query="select * from question where module=$module and unit='$unit'";
    $result= mysql_query($query)or die("error in query");
    if(mysql_num_rows($result)>0)
    {
    echo"<center><table border='10' align='center'> ";
 echo"<tr><th>Question</th><th>Ans1</th><th>Ans2</th><th>Ans3</th><th>Ans4</th><th>Correct Ans</th></tr>";

    while($row=mysql_fetch_object($result))
    {
        echo"<tr>";
     echo"<td>$row->ques</td><td>$row->ans1</td><td>$row->ans2</td><td>$row->ans3</td><td>$row->ans4</td><td>$row->cans</td></tr>";

    }
    echo"</table></center>";
    
}
?>
