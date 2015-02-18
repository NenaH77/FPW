<?php
@mysql_connect("localhost", "root", "root");
@mysql_select_db("login");

?>

<html>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="PPW Final Project">
    <meta name="author" content="Angelica M. Dinh">

    <title>Admin | Home</title>

    <!-- CSS -->
    <link href="css/style.css" rel="stylesheet" media="screen">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

<body>
<div class="container">
    <header>
<!-- Logo -->
        <img class="logo" src="image/logo.png" alt="Shalom Logo" />
<!-- Nav -->
        <nav id="mynavs" class="navbar">
            <div id="navcontainer" class="container">
                <div class="navbar-header">
                    <button type="button" id="mynavs1" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div id="navbar" class="navbar-collapse collapse">
                    <ul id="navs" class="nav navbar-nav">
                        <li><a href="member.php">Home</a></li>
                        <li><a href="resources.php">Sermons</a></li>
                        <li class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Update<span class="caret"></span></a>
                            <ul class="dropdown-menu" #navbarrole="menu">
                                <li><a href="add.php">Employees</a></li>
                                <li><a href="grp.php">Small Group</a></li>
                            </ul>
                        </li>
                        <li><a href="logout.php">Logout</a></li>
                        <li><a href="www.paypal.com">PayPal</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>



