<html>
<head>
<title></title>    
    
</head>

<body>
    
<?php
    session_start();
unset($_SESSION['submitted']);

if (!!isset($_SESSION['submittted']))
{
 $oldPsswd = $_POST['oldPsswd'];
 $newPsswd = $_POST['newPsswd1'];
 $psswConfirm = $_POST ['newPsswd2'];
    
  echo "one";  
 
$dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = 'Jiggers12';
    $database = 'logindata';
   @ $db = mysql_connect($dbhost,$dbuser,$dbpass);

if (!$db) 
        {
        die('Could not connect: ' . mysqli_error());
        }
    $sql = mysql_select_db($database);
       
    if (!$sql)
        {   
        die ("Can\'t main_content database : " . mysql_error());
        }
    
    
    
    
 $i=0;
    $query='SELECT * FROM usrdata' ;
    $result=mysql_query($query);
    $num = mysql_numrows($result);
    if(!$result)
        {
    die(mysql_error());
        }

    while ($i < $num)
    {
        $userPssw[$i]=mysql_result($result,$i,'password');
       
    
        if ($userPssw[$i] == $oldPsswd)
        {
            if ($newPsswd == $psswConfirm)
            {
                
                $query = "INSERT INTO usrdata (password) values ('".$newPsswd."')";
	            $result = mysql_query($query);
                echo "<h1>Password Successfully Changed<h1>";
                break;
            }
            else
            {
                echo "<h1>Try Again</h1>";
            }
        
        }
        else
        {
        $i++;
         }
        }    
    }
else
{
$_SESSION['submitted']="true";
    echo "two";
}
?>
    


<form action="changePsswd.php">
<table>
<thead>
<td>Change Password</td>
</thead>
<tr>
<td>Old Password </td><td><input type="text" name="oldPsswd"/></td>    
</tr>
<tr>
<td>Enter New Password </td><td><input type="text" name="newPsswd1"/></td>    
</tr>
<tr>
<td>Enter New Password Again </td><td><input type="text" name="newPsswd2"/></td>    
</tr>    
</table>
</form>
</body>
</html>