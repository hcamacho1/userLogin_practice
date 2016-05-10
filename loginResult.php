<html>
    <head>
        <title>Login page</title>    
    </head>
    <body>
    <?php
session_start();
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = 'Jiggers12';
    $database = 'logindata';
    $db = mysql_connect($dbhost,$dbuser,$dbpass);


    $uName = $_POST['usName'];
    $psswd = $_POST['psswrd'];
    
    if (!$db) 
        {
        die('Could not connect: ' . mysql_error());
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
        $userInfo[$i]=mysql_result($result,$i,'userName');
        $userPssw[$i]=mysql_result($result,$i,'password');
       
    
        if ($userInfo[$i] == $uName && $userPssw[$i] == $psswd)
        {
        echo "<h1>Successful Login!</h1>";
        echo "<h2>Welcome Back ".$userInfo[$i]."</h2>";
        echo "<a href='changePsswd.php'>Change Current Password</a>";
        break;
        }
        else
        {
        $i++;
         }
    }

    if ($i >= $num)
    {
     echo "<h1>login failed</h1>";   
    }

    
     ?>
    </body>

</html>