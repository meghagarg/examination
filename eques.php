<?php
$module=$_GET['module'];
$unit=$_GET['unit'];
include 'basic.php';
$query="select * from question where module=$module and unit='$unit'";
    $result= mysql_query($query)or die("error in query");
    if(mysql_num_rows($result)>0)
    {
    echo"<center><table border='10' align='center'> ";
 echo"<tr><th>Question</th><th>Ans1</th><th>Ans2</th><th>Ans3</th><th>Ans4</th><th>Correct Ans</th><th>Edit</th><th>Delete</th></tr>";

    while($row=mysql_fetch_object($result))
    {
        echo"<tr>";
     echo"<td>$row->ques</td><td>$row->ans1</td><td>$row->ans2</td><td>$row->ans3</td><td>$row->ans4</td><td>$row->cans</td><td><a href='editques.php?qid=$row->qid'>edit</a></td><td><a href='deleteques.php?qid=$row->qid'>delete</a></td></tr>";

    }
    echo"</table></center>";

}
?>
