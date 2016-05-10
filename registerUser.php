<html>
<head> 
<title>Register New User</title>
</head>
<body>


<?php
session_start();

if (isset($_SESSION['usr1']))
    {
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
$newUsrName = $_POST['newUsrName'];
$newUsrPssw1 = $_POST['newUsrPsswd1'];
$newUsrPssw2 = $_POST['newUsrPsswd2'];		
if (@!$newUsrName && !$newUsrPssw1 && !$newUsrPssw2)
{
echo "<h1>Sorry, you must enter all required data to register</h1>";
 echo "<a href='loginPage.php'>Return To Login Page</a>"; 
exit;
}
else
{
	
 
if (!$newUsrName || !$newUsrPssw1 || !$newUsrPssw2)
	{
	echo "<h2>Not able to create new user. Missing data</h1>";
     echo "<a href='loginPage.php'>Return To Login Page</a>";
	exit;
	}
	
if ($newUsrPssw1 == $newUsrPssw2)
	{
	$query = "INSERT INTO usrdata (userName, password) values ('".$newUsrName."', '".$newUsrPssw1."')";
	$result = mysql_query($query);

	}
	else
	{	
	echo "<h1>password verification failed</h1>";
    echo "<a href='loginPage.php'>Return To Login Page</a>";
   
	exit;
	}

if (!$result)
{
	echo "nothing written";
    echo "<br>";
    die(mysql_error());
}	
else
{
echo "<h1>success!</h1>";
echo "<a href='loginPage.php'>Return to Login Page</a>";
unset($_SESSION['usr1']);
}

    }
        
} 
else
{
$_SESSION['usr1'] = true;
}
?>
    

<form action="registerUser.php" method="post">
<table>
<thead colspan="2">
<td><h1>Register new user</h1></td>
</thead>
<tr>
<td><p>Please enter a user name:</p></td><td><input type="text" name="newUsrName"/></td>
</tr>
<tr>
<td><p>Please enter a password:</p></td><td><input type="text" name="newUsrPsswd1"/></td>
</tr>
<tr>
<td><p>Please re-enter password:</p></td><td><input type="text" name="newUsrPsswd2"/></td>
</tr>
<tr>
<td><input type="submit" name="Submit"/></td>
</tr>
</table>
   
</form>

</body>
</html>