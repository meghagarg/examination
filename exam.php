<?php
session_start();
$searchbat = $_SESSION['uid'];
include 'basic.php';
#$handle = fopen("file.txt", "r");
#if ($handle)
#{
#    while (!feof($handle))
 #   {
  #      $buffer = fgets($handle);
   #     if(strpos($buffer, $searchbat) !== FALSE)
    #        $matches = $buffer;
    #}
   # fclose($handle);
#}

#$batchname = explode("-", $matches);

#$searchthis1 = $batchname[1];

#$handle1 = fopen("mo.txt", "r");
#if ($handle1)
#{
 #   while (!feof($handle1))
  #  {
   #     $buffer = fgets($handle1);
    #    if(strpos($buffer, $searchthis1) !== FALSE)
     #       $matches1 = $buffer;
    #}
    #fclose($handle1);
#}

#$ks1 = explode("-", $matches1);
$query="select emod,eunit from batch_status,student where student.batch_id =batch_status.batch_id";
$result=mysql_query($query);
while($row=mysql_fetch_object($result))
{
$module=$row->emod;
$unit=$row->eunit;
}
//$module=$_POST['module'];
//$unit=$_POST['unit'];
if(!isset($_GET['submit']) )
{

?>

<html>
<title></title>
<head>
<body>
        <form name="form1" method="GET" align="center">
              
<table>
<?php
#if($module=="1" & $unit=="unit1")
	    {
$_SESSION['muid']="mod1u1";
?>
<tr><td colspan='4'>Ques.1 Which of the following below is true functionalities of shell?</td></tr>
          <tr><td >&nbsp;<input type='radio' id='qid1' name='qid1' value='a'>Authenticates user</td>
               <td>&nbsp;<input type='radio' id='qid1' name='qid1' value='b'> Interprets commands</td>
              <td>&nbsp;<input type='radio' id='qid1' name='qid1' value='c'>Allocates time and memory to programs</td>
              <td>&nbsp;<input type='radio' id='qid1' name='qid1' value='d'>only a and b </td>
                 </tr>
<tr> <td colspan='4'>   </td>   </tr>
<tr> <td colspan='4'>  </td> </tr>
<td colspan='4'>Ques.2 The command used to change file permissions from the command line is?</td></tr>
          <tr><td >&nbsp;<input type='radio' id='qid2' name='qid2' value='a'>perm</td>
              <td>&nbsp;<input type='radio' id='qid2' name='qid2' value='b'> setperm</td>
              <td>&nbsp;<input type='radio' id='qid' name='qid2' value='c'>setmode</td>
              <td>&nbsp;<input type='radio' id='qid2' name='qid2' value='d'>chmod </td>
                 </tr>

<?php
}
else if($module=="1" & $unit=="unit2")
    {
$_SESSION['muid']="mod1u2";
?>
<td colspan='4'>Ques.1 Which of the following below are true functionalities of Kernel?</td></tr>
          <tr><td >&nbsp;<input type='radio' id='qid1' name='qid1' value='a'>Allocates time and memory to programs</td>
              <td>&nbsp;<input type='radio' id='qid1' name='qid1' value='b'>Authenticates user</td>
              <td>&nbsp;<input type='radio' id='qid1' name='qid1' value='c'>Interprets commands</td>
              <td>&nbsp;<input type='radio' id='qid1' name='qid1' value='d'>All of the above</td>
                 </tr>
<tr> <td colspan='4'>   </td>   </tr>
<tr> <td colspan='4'>  </td> </tr>

<td colspan='4'>Ques.2 What is the Package name to use LVM graphically ?</td></tr>
          <tr><td >&nbsp;<input type='radio' id='qid2' name='qid2' value='a'>system-config-lvm</td>
              <td>&nbsp;<input type='radio' id='qid2' name='qid2' value='b'>system-lvm-config</td>
              <td>&nbsp;<input type='radio' id='qid' name='qid2' value='c'>system-configuartion-lvm</td>
              <td>&nbsp;<input type='radio' id='qid2' name='qid2' value='d'>All of these</td>
                 </tr>

<?php
}
?>
</table>
<br><br>       <input type='submit' name='submit' value='submit' > 

       
</form>
</body>
</html>
<?php
}
else {
$qid1=$_GET['qid1'];
$qid2=$_GET['qid2'];
$modu=$_SESSION['muid'];
//echo $qid1.' '.$qid2.' '.$modu;
$count=0;
   if($modu=="mod1u1")
{
if($qid1=="b")
$count++;
if($qid2=="d")
$count++;
}
    elseif($modu=="mod1u2")
{
if($qid1=="a")
$count++;
if($qid2=="a")
$count++;
}
echo "your result is : ".$count;
}
?>



