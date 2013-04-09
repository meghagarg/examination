<?php
$bid=$_GET['batid'];
include 'basic.php';
#$file = file("mo.txt");
#$newLines = array();
#foreach ($file as $line)
 #   if (preg_match("/$bid/", $line) === 0)
  #      $newLines[] = chop($line);
#$newFile = implode("\n", $newLines);
#file_put_contents("mo.txt", $newFile);


#$myFile = "mo.txt";

#$fh = fopen($myFile, 'a') or die("can't open file");

if(empty($_POST['submit']))
{
?>

<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="javascript" type="text/javascript">
function getXMLHTTP() { 
                var xmlhttp=false;      
                try{
                        xmlhttp=new XMLHttpRequest();
                }
                catch(e)        {               
                        try{                    
                                xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
                        }
                        catch(e){
                                try{
                                xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
                                }
                                catch(e1){
                                        xmlhttp=false;
                                }
                        }
                }
                        
                return xmlhttp;
    }
        
    
function getunit(module)
{          
    var strURL="findunit.php?module="+module;
    var req = getXMLHTTP();
    if (req) {
    
            
            req.onreadystatechange = function() {
                    if (req.readyState == 4) {
                            // only if "OK"
                            if (req.status == 200) {                                                
                                    document.getElementById('unitdiv').innerHTML=req.responseText;                                         
                            } else {
                                    alert("There was a problem while using XMLHTTP:\n" + req.statusText);
                            }
                    }                               
            }                       
            req.open("GET", strURL, true);
            req.send(null);
    }               
}
</script>
</head>
<body>
    <form method="post"  name="form1">
    
<table width="60%">
  <tr>
    <td width="150">Module</td>
    <td  width="150"><select name="module" onChange="getunit(this.value)">
        <option value="">Select Module</option>
        <option value="1">RH124</option>
        <option value="2">RH135</option>
        <option value="3">RH255</option>
        </select></td>
  </tr>
  <tr style="">
    <td>Unit</td>
    <td ><div id="unitdiv"><select name="unit" >
        <option>Select Module First</option>
        </select></div></td>
  </tr>
 </table>
  <br><br>
<input type="hidden" value="<?php echo $bid;?>" name="hfid">

<input type="submit" name="submit" />
<br><br>
<input type="reset" value="Reset!">
<br>
 
</form>
</body>
</html>
                  <?php
}
else {
$mod=$_POST[module];
$unit=$_POST[unit];

$id=$_POST[hfid];

$query1="update batch_status set emod='$mod', eunit='$unit' where batch_id=$id";
mysql_query($query1) or die("error in query");
echo "exam status is set for batch $id";
#echo "Updated module-unit for exam is ".$mod.' '.$unit.' for batch '.$bid;

#$mod="\n".$mod."-";
#$unit=$unit."-";
#$bid=$bid."\n";
#fwrite($fh, $mod);
#fwrite($fh, $unit);
#fwrite($fh, $bid);
#fclose($fh);

}

?>
                                                                        
    
