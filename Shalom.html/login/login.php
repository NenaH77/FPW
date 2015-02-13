<?php

/*require('config.php');*/

$user = "root";
$pass = "root";
$mysql = 'mysql:host=localhost; dbname=tut; port=8889';
$dbh = new PDO($mysql, $user, $pass);

if(isset($_POST['submit'])){
    $username = mysql_escape_string($_POST['username']);
    $pass = mysql_escape_string($_POST['pass']);

    $pass = md5($pass);

    $sql = mysql_query("SELECT * FROM `users` WHERE `username` = '$username' AND `pass` = '$pass'");
    if(mysql_num_rows($sql) > 0){
        echo "you are now logged in.";
        exit();
    }else{
        echo "Wrong U/P combination";
    }


}else{

}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Shalom Login Page">
    <meta name="author" content="Angelica M. Dinh">
    <link rel="icon" href="../../favicon.ico">

    <title>Admin - Shalom of Bay City</title>

    <!-- CSS -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>

<p><a href="register.php">Register</a> | <a href="login.php">Login</a></p>
<h3>Please Login</h3>
    <form action="" method="POST">
        Username: <input type="text" name="user"><br />
        Password: <input type="password" name="pass"><br />
        <input type="submit" value="Login" name="submit" />
    </form>

<?php
    if(isset($_POST["submit"])){

        if(!empty($_POST['user']) && !empty($_POST['pass'])){
            $user=$_POST['user'];
            $pass=$_$POST['pass'];

            $con=mysql_connect('localhost', 'root', 'root') or die(mysql_error());
            mysql_select_db('user_registration') or die('cannot select DB');

            $query=mysql_query("SELECT * FROM  login WHERE username = '".$user."' AND password='".$pass."'");
            $numrows=mysql_num_rows($query);
            if($numrows!=0){
                while($row=mysql_fetch_assoc($query)){
                    $dbusername=$row['username'];
                    $dbusername=$row['password'];
                }

                if($user == $dbusername && $pass == $dbpassword){
                    session_start();
                    header("Location: member.php");{
                    }else{
                    echo "Invalid username or password!";
                    }
                }else{
                    echo "All fields are required!";
                }
            }
?>

</body>
</html>











<body>
    <div class="container">
    <form action="login.php" method="POST">
        Username: <input class="form-control" type="text" name="username" /><br />
        Password: <input class="form-control" type="password" name="pass" /><br />
        <input class="form-control" type="submit" name="submit" value="Log In" />
    </form>
    </div>
</body>
</html>
