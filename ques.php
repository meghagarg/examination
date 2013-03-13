<?php
$module=$_GET['module'];
$unit=$_GET['unit'];



    echo"<center><table border='10'>";
    echo"<tr><th>Question</th><th>Ans1</th><th>Ans2</th><th>Ans3</th><th>Ans4</th><th>Correct Ans</th></tr>";
    if($module=="1" & $unit=="unit1")
    {
     echo"<tr><td>row[0]</td><td>row[1]</td><td>row[2]</td><td>row[3]</td><td>row[4]</td><td>row[5]</td></tr>";
     echo"<tr><td>row[0]</td><td>row[1]</td><td>row[2]</td><td>row[3]</td><td>row[4]</td><td>row[5]</td></tr>";

    }
    else if($module=="1" & $unit=="unit2")

    {
        echo"<tr><td>row[0]</td><td>row[1]</td><td>row[2]</td><td>row[3]</td><td>row[4]</td><td>row[5]</td></tr>";
        echo"<tr><td>row[0]</td><td>row[1]</td><td>row[2]</td><td>row[3]</td><td>row[4]</td><td>row[5]</td></tr>";

    }
 else if($module=="2" & $unit=="unit3")
    {
        echo"<tr><td>row[0]</td><td>row[1]</td><td>row[2]</td><td>row[3]</td><td>row[4]</td><td>row[5]</td></tr>";
        echo"<tr><td>row[0]</td><td>row[1]</td><td>row[2]</td><td>row[3]</td><td>row[4]</td><td>row[5]</td></tr>";

    }
    else if($module=="2" & $unit=="unit4")

    {
        echo"<tr><td>row[0]</td><td>row[1]</td><td>row[2]</td><td>row[3]</td><td>row[4]</td><td>row[5]</td></tr>";
        echo"<tr><td>row[0]</td><td>row[1]</td><td>row[2]</td><td>row[3]</td><td>row[4]</td><td>row[5]</td></tr>";

    }
        echo"</table>";
?>
