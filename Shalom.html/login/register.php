
<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Admin - Shalom of Bay City</title>

    <!-- CSS -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>

<body>
    <p><a href="register.php">Register</a> | <a href="login.php">Login</a></p>
    <h2 class="form-signin-heading">Register Form</h2>

    <form class="form-signin" method="POST">
        Username<input class="form-control" type="text" name="username" /><br required autofocus/>
        Password:<input class="sr-only" type="password" name="pass1" /><br required/>
        <input class="form-control" type="submit" value="register" name="submit" />
    </form>

<?php
if (isset($_POST["submit"])){

    if(!empty($__POST['user']) && !empty($__POST['pass'])){
        $user=$__POST['user'];
        $pass=$__POST['pass'];

        $con=mysql_connect('localhost', 'root', 'root') or die(mysql_error());
        mysql_select_db('user_registration') or die("cannot select DB");

        $query=mysql_query("SELECT * FOM login WHERE username='".$user."'");
        $numrows=mysql_num_rows($query);
        if($numrows==0){
            $sql="INSERT INTO login(username, password) VALUES('$user', '$pass')";

            $result=mysql_query($sql);

            if($result){
                echo "Account Successfully Created";
            }else{
                echo "Failure!";
            }
        }else{
        echo "That username already exists. Please try another username.";
        }else{
        echo "All fields are required!";
}
}
?>
</body>
</html>
