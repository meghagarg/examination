<?php

if(!isset($_GET['submit']))

{
$sid=$_GET['sid'];
if($sid == '1')
{
 $fname="Anisha";
 $lname="Anand";
 $contact="773299912";
 $email="anish.anand@gmail.com";
 $batch_id="MMR44";
 $usernmae="Anisha77329";
 $pass="1234";
     
      }
else
{
$fname="Amit";
 $lname="Kumar";
 $contact="992231233";
 $email="amit.kumar@gmail.com";
 $batch_id="MWF12";
 $username="Amit99223";
 $pass="1234";
}
?>
<html><head>
       
        <body>

            <form method="GET">

                First name<input type="text" value="<?php echo $fname;?>" name="ffname"><br>
             Last name<input type="text" value="<?php echo $lname;?>" name="llname"><br>
                Contact <input type="text" value="<?php echo $contact;?>" name="ccontact"><br>
                 Email id <input type="text" value="<?php echo $email; ?>" name="eemail"><br>                 
                  Select Batch id:

            <select name='batid'>
           <option value='-1'><?php echo $batch_id;?></option>
           <option value='MWF12'>MWF12</option>
           <option value='MMR44'>MMR44</option>
</select>                     
         
                       <input type="submit" name="submit" value="edit">

            </form></body>
            </html>
                <?php
                }
                else
                {
                
                	$ffname=$_GET['ffname'];
                	$llname=$_GET['llname'];
                    $ccontact=$_GET['ccontact'];
                    $eemail=$_GET['eemail'];
                	$bbatid=$_GET['batid'];
                	echo "Edited value of student are :-<br>";
                	echo "First name : $ffname <br>";
                echo "Last name : $llname<br>";
                echo "Conatct : $ccontact<br>";
                echo "Email : $eemail<br>";
                echo "Batch id : $bbatid";
                
                }
                ?>
                   