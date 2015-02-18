<!----- HTML FORM ------>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Login Form </title>

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

    <div id="msg"></div>
        <form class="form-signin" action="login.php" method="POST">
            <h1 class="form-signin-heading">Please Register</h1>

            User Name:<input class="form-control" type="text" name="user" /><br>

            Password:<input class="form-control" type="password" name="pass1" /><br>


            <input class="btn btn-lg btn-primary btn-block" type="submit" value="LogIn" name="submit" />
        </form>
    </div>
    </body>
</html>


<?php

if(isset($_POST['submit'])){

//password security
$pwd = md5($_POST["pass1"]);

@mysql_connect("localhost", "root", "root");
@mysql_select_db("login");


    //username and password combo match in database
    $sql = @mysql_query("SELECT * FROM users WHERE user = '$_POST[user]' and pass1 = '$pwd'");
    while($row=mysql_fetch_array($sql)){

    }
?>

<script type="text/javascript">
window.location="member.php";
</script>
<?php } ?>

<script type="text/javascript">
document.getElementbyId["msg"].innerHTML = "Bad username or password";
</script>
