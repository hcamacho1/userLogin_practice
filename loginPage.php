<html>
    <head></head>
    <body>
    <?php
    session_start();
    unset($_SESSION['usr1']);
    echo "<form action='loginResult.php' method='post'>";
    echo "<table>";
    echo "<thead colspan='2'>";
    echo "<td><h1>Login Page</h1></td>";
    echo "</thead>";
    echo "<tr>";
    echo "<td>username</td><td><input type='text' name='usName' /></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>password</td><td><input type='text' name='psswrd' /></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td><a href='registerUser.php'>New user Register</a></td><td><input type='Submit' name='submit' /></td>";
    echo "</tr>";
    echo "</table>";
    echo "</form>";

?>
    </body> 
    </html>
