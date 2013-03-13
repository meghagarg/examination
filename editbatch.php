<?php

if(!isset($_GET['submit']))

{
$bid=$_GET['bid'];
if($bid == '1')
{
 $batch_id="MWF12";
     $tname="Megha Garg";
      }
else
{
$batch_id="MMR44";
$tname="Manish Nautiyal";
}
?>
<html><head>
       
        <body>

            <form method="GET">

                Batch Id&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" value="<?php echo $batch_id;?>" name="bbid"><br>
             Trainer name<input type="text" value="<?php echo $tname;?>" name="ttname"><br>

                       <input type="submit" name="submit" value="edit">

            </form></div></body>
            </html>
                <?php
                }
                else
                {
                
                	$bbid=$_GET['bbid'];
                	$ttname=$_GET['ttname'];
                
                	echo "Edited value of batchid is '$bbid' and trainer name is '$ttname'";
                
                
                }
                ?>
                       