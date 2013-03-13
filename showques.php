<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="javascript" type="text/javascript">
function getXMLHTTP() { 
                var xmlhttp=false;      
                        xmlhttp=new XMLHttpRequest();
                        
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
function showquestion(unit,module)
{
//var module=document.form1.module.value;
//      var unit=document.form1.unit.value;

 //document.write(module);
// document.write(unit);
 var strURL="ques.php?module="+module+"&unit="+unit;
    var req = getXMLHTTP();
    if (req) {
    
            req.onreadystatechange = function() {
                    if (req.readyState == 4) {
           // only if "OK"
                            if (req.status == 200) {   

                                    document.getElementById('dv').innerHTML=req.responseText;                                         
                            } else {
                                    alert("There was a problem while using XMLHTTP:\n" + req.statusText);
                            }
                    }                               
            }                       
            req.open("GET", strURL, true);
            req.send();
    }    
}

</script>
</head>
<body>
    <form method="post"  name="form1">
<table width="60%">
  <tr>
    <td width="150">Module</td>
    <td  width="150"><div id="moddiv"><select name="module" onChange="getunit(this.value)">
        <option value="">Select Module</option>
        <option value="1">RH124</option>
        <option value="2">RH135</option>
        <option value="3">RH255</option>
        </select></div></td>
  </tr>
  <tr style="">
    <td>Unit</td>
    <td ><div id="unitdiv"><select name="unit"  >
        <option>Select Module First</option>
<option>unit1</option>
        </select></div></td>
  </tr>
</table>
            <br/>

            <div id="dv">
            </div>


</form>
</body>
</html>
    