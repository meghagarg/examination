<html>
<head>
    <title></title>
</head>
<body>

<center>
        <form  action="login.php" method="get">

                <table>
                    <tr><td text align="center" colspan="3"><h2>Welcome to login</h2></td></tr>
                      <tr><td>Enter User_name :</td>
                        <td><input type="text" name="uname" /></td></tr>
    <tr><td>Enter your password :</td>
                        <td><input type="password" name="passwd"></td></tr>
 <tr><td>Enter your type :</td>
                        <td><select name="utype">
             <option value="-1">select your type</option>
                                <option value="teacher">faculty</option>
                                <option value="student">Student</option>
                                <option value="admin">Admin</option>
                            </select></td></tr>

   <tr><td>&nbsp;</td><td><input type="submit" name="submit" value="submit"/></td></tr>
                </table>

        </form>
</center>
        </body>
</html>
