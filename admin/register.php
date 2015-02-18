<?php

/*require('config.php');*/
@mysql_connect("localhost", "root", "root");
@mysql_select_db("login");


if(isset($_POST['submit'])){

//password security
$pwd = md5($_POST["pass1"]);

    //verify
    $email1 = $_POST['email1'];
    $email2 = $_POST['email2'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];

    if($email1 == $email2){
        if($pass1 == $pass2){
        //passwords match
        $id = @mysql_escape_string($_POST['id']);
        $fname = @mysql_escape_string($_POST['fname']);
        $lname = @mysql_escape_string($_POST['lname']);
        $user = @mysql_escape_string($_POST['user']);
        $email1 = @mysql_escape_string($email1);
        $email2 = @mysql_escape_string($email2);
        $pass1 = @mysql_escape_string($pass1);
        $pass2 = @mysql_escape_string($pass2);



        //check username to see if it already exists
        @mysql_query("SELECT * FROM users WHERE user = $user");
        if(@mysql_num_rows($sql) > 0){
            echo "Sorry, user already exists.";
            exit();
        }

        //insert user info into database
        @mysql_query("INSERT INTO users VALUES ('$id', '$fname', '$lname', '$user', '$email1', '$pwd')");
        header("Location: member.php");


        }else{
            //no match
            echo "Sorry, your passwords do not match.<br>";
            exit();
        }
    //emails match

    }else{
        //no match
        echo "Sorry, you emails do not match.<br>";
        exit();
    }
}else{
}

?>

<!----- HTML FORM ------>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Register Form </title>

    <!-- CSS -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

    <body>
    <div class="container">

    <header>
        <!-- Logo -->
        <img class="logo" src="image/logo.png" alt="Shalom Logo" />
    </header>

    <body>
        <form class="form-signin" action="register.php" method="POST">

        <h1 class="form-signin-heading">Please Login</h1>
            First Name:<input class="form-control"  type="text" name="fname" /><br>
            Last Name:<input class="form-control"  type="text" name="lname" /><br>
            User Name:<input class="form-control"  type="text" name="user" /><br>
            Email:<input class="form-control"  type="text" name="email1" /><br>
            Confirm Email:<input class="form-control"  type="text" name="email2" /><br>
            Password:<input class="form-control"  type="password" name="pass1" /><br>
            Confirm Password:<input class="form-control"  type="password" name="pass2" /><br>

            <input class="btn btn-lg btn-primary btn-block" type="submit" value="Register" name="submit" />
        </form>
    </body>
</html>