<?php
@mysql_connect("localhost", "root", "root");
@mysql_select_db("login");

session_start();
//destroy session
if(@$_SESSION['user']){
    $_SESSION['user'] = false;
    $_SESSION['pass1'] = false;
    session_destroy();
}
//redirect user to new page
header("Location: login.php");
?>