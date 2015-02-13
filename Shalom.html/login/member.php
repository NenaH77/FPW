<?php
session_start();
if(!isset($_SESSION["sess_user"])){
    header("Location: login.php");
}else{
?>

<!Doctype html>
<html>
<head>
<title>Member</title>
</head>

<body>
<h2>Welcome <?php $__SESSION['sess_user']; ?><a href="logout.php">Logout</a></h2>
<p>
Upload files ....
</p>
</body>
</html>

<?php } ?>