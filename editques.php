<?php

if(!isset($_GET['submit']))

{
$qid=$_GET['qid'];
if($qid == '11')
{
 $ques="Which of the following below is true functionalities of shell?";
 $ans1="Authenticates user";
 $ans2="Interprets commands";
 $ans3="Allocates time and memory to programs";
 $ans4="only a and b";
 $cans="Interprets commands";
 

      }
else if($qid=='12')
{
$ques="The command used to change file permissions from the command line is?";
 $ans1="perm";
 $ans2="setperm";
 $ans3="setmod";
 $ans4="chmod";
 $cans="chmod";
 
}

else if($qid=='21')
{
	$ques="Which of the following below are true functionalities of Kernel?";
	$ans1="Allocates time and memory to programs";
	$ans2="Authenticates user";
	$ans3="Interprets commands";
	$ans4="All of the above";
	$cans="Allocates time and memory to programs";

}

else if($qid=='22')
{
	$ques="What is the Package name to use LVM graphically ?";
	$ans1="system-config-lvm";
	$ans2="system-lvm-config";
	$ans3="system-configuartion-lvm";
	$ans4="All of these";
	$cans="system-config-lvm";
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

                       <input type="submit" name="submit" value="edit">

            </form></body>
            </html>
                <?php
                }
                else
                {

                        $qqname=$_GET['qqname'];
                        $aans1=$_GET['aans1'];
                    $aans2=$_GET['aans2'];
                    $aans3=$_GET['aans3'];
                        $aans4=$_GET['aans4'];
                        $ccans=$_GET['ccans'];
                        echo "Edited value of questions are :-<br>";
                        echo "Question : $qqname <br>";
                echo "First answer : $aans1<br>";
                echo "Second Answer : $aans2<br>";
                echo "Third Answer : $aans3<br>";
                echo "Third answer : $aans4<br>";
                echo "Fourth answer : $ccans";
                }
                ?>
                  