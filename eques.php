<?php
$module=$_GET['module'];
$unit=$_GET['unit'];



    echo"<center><table border='10'>";
    echo"<tr><th>Question</th><th>Ans1</th><th>Ans2</th><th>Ans3</th><th>Ans4</th><th>Correct Ans</th><th>Edit</th><th>Delete</th></tr>";
    if($module=="1" & $unit=="unit1")
    {

     echo"<tr><td>Which of the following below is true functionalities of shell?</td><td>Authenticates user</td><td>Interprets commands</td><td>Allocates time and memory to programs</td><td>only a and b</td><td>Interprets commands</td><td><a href='editques.php?qid=11'>edit</a></td><td><a href='deleteques.php?qid=11'>delete</td></tr>";
     echo"<tr><td>The command used to change file permissions from the command line is?</td><td>perm</td><td>setperm</td><td>setmode</td><td>chmod</td><td>chmod</td><td><a href='editques.php?qid=12'>edit</a></td><td><a href='deleteques.php?qid=12'>delete</td></tr>";
    }
    else if($module=="1" & $unit=="unit2")

    {
        echo"<tr><td>Which of the following below are true functionalities of Kernel?</td><td>Allocates time and memory to programs</td><td>Authenticates user</td><td>Interprets commands</td><td>All of the above</td><td>Allocates time and memory to programs</td><td><a href='editques.php?qid=21'>edit</a></td><td><a href='deleteques.php?id=21'>delete</td></tr>";
        echo"<tr><td>What is the Package name to use LVM graphically ?</td><td>system-config-lvm</td><td>system-lvm-config</td><td>system-configuartion-lvm</td><td>All of these</td><td>system-config-lvm</td><td><a href='editques.php?qid=22'>edit</a></td><td><a href='deleteques.php?id=22'>delete</td></tr>";
    }
 else if($module=="2" & $unit=="unit3")
    {

        echo"<tr><td>row[0]</td><td>row[1]</td><td>row[2]</td><td>row[3]</td><td>row[4]</td><td>row[5]</td><td><a href='editques.php?qid=31'>edit</a></td><td><a href='deleteques.php?id=31'>delete</td></tr>";
        echo"<tr><td>row[0]</td><td>row[1]</td><td>row[2]</td><td>row[3]</td><td>row[4]</td><td>row[5]</td><td><a href='editques.php?qid=32'>edit</a></td><td><a href='deleteques.php?id=32'>delete</td></tr>";

    }
    else if($module=="2" & $unit=="unit4")

    {
        echo"<tr><td>row[0]</td><td>row[1]</td><td>row[2]</td><td>row[3]</td><td>row[4]</td><td>row[5]</td><td><a href='editques.php?qid=41'>edit</a></td><td><a href='deleteques.php?id=41'>delete</td></tr>";
        echo"<tr><td>row[0]</td><td>row[1]</td><td>row[2]</td><td>row[3]</td><td>row[4]</td><td>row[5]</td><td><a href='editques.php?qid=42'>edit</a></td><td><a href='deleteques.php?id=42'>delete</td></tr>";
    }

    else if($module=="3" & $unit=="unit3")
    {
    	echo"<tr><td>row[0]</td><td>row[1]</td><td>row[2]</td><td>row[3]</td><td>row[4]</td><td>row[5]</td><td><a href='editques.php?qid=51'>edit</a></td><td><a href='deleteques.php?id=51'>delete</td></tr>";

    
    	echo"<tr><td>row[0]</td><td>row[1]</td><td>row[2]</td><td>row[3]</td><td>row[4]</td><td>row[5]</td><td><a href='editques.php?qid=52'>edit</a></td><td><a href='deleteques.php?id=52'>delete</td></tr>";
    }
    else if($module=="3" & $unit=="unit2")
    
    {
    	echo"<tr><td>row[0]</td><td>row[1]</td><td>row[2]</td><td>row[3]</td><td>row[4]</td><td>row[5]</td><td><a href='editques.php?qid=61'>edit</a></td><td><a href='deleteques.php?id=61'>delete</td></tr>";
    	echo"<tr><td>row[0]</td><td>row[1]</td><td>row[2]</td><td>row[3]</td><td>row[4]</td><td>row[5]</td><td><a href='editques.php?qid=62'>edit</a></td><td><a href='deleteques.php?id=62'>delete</td></tr>";
    
    }
    echo"</table>";
?>
