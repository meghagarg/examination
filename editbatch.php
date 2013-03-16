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

Trainer Name <select name='ttname'>
           <option value='-1'><?php echo $tname;?></option>
        <option value="1">Megha Garg</option>
        <option value="2">Manish Nautiyal</option>
        <option value="3">Manish Saini</option>

</select>

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
                       
