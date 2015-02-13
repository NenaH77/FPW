<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="PPW Final Project">
    <meta name="author" content="Angelica M. Dinh">

    <title>Shalom of Bay City Sermons</title>

    <!-- CSS -->
    <link href="css/style.css" rel="stylesheet" media="screen">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- modernizr -->
    <script type="text/javascript" src="js/modernizr.js"></script>


</head>
<body>
<div class="container">
    <header>
        <!-- Logo -->
        <a class="home" rel="homepage" title="Shalom of Bay City Church" href="index.html"><img class="logo" src="image/logo.png" alt="Shalom Logo" /></a>
        <!-- Nav -->
        <nav id="mynavs" class="navbar">
            <div class="container">
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
                        <li><a href="index.html">Home</a></li>
                        <li><a href="location.html">Location</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Ministry <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="ministries.html">All Ministries</a></li>
                                <li><a href="smallgrp.html">Small Group</a></li>
                            </ul>
                        </li>
                        <li><a href="resources.php">Resources</a></li>
                        <li><a href="serve.html">WeServ</a></li>
                        <li><a href="give.html">Give Online</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- body -->
    <div class="headline">
        <h4 class="intro">Sermon Series</h4>
        <img class="image1" src="image/headphone_b.jpg" alt="sermons" width="655px" height="431px" />
    </div>

    <div class="wrapper">
        <div class="feature">
            <h2>Sermon Archives and Study Guides</h2>
            <p>Miss a sermon? Wants to listen to a message again? This is where you'll find our audio archive of past sermons.</p>
        </div>

        <!-- sermon1 -->
        <div class="wrapper">
            <table class="table table-striped">
                <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Description</th>
                    <th>Summary</th>
                    <th>Audio</th>
                </tr>


<?php

    @mysql_connect("localhost", "root", "root");
    @mysql_select_db("sermons");

    $order = "SELECT * FROM episodes ORDER BY id";
    $result = mysql_query($order);

    while($data = mysql_fetch_row($result)){
            echo("<tr><td>$data[1]</td><td>$data[2]</td><td>$data[3]</td><td>$data[4]</td>");
            }
?>

<td><audio controls><?php echo $data[5] ?>Your browser does not support the audio element</audio></td>
</tr>
</table>



</td>
</table>











<!--

        <div class="sermon">
            <p><img src="image/advent.png" alt="sermon" width="350px" height="150px"/></p>
            <p><a class="media" href="resources.html">Listen to Series ></a></p>
            <audio controls>
                <source src="audio/Advent/advent_Week1.ogg" type="audio/ogg">
                Your browser does not support the audio element
            </audio>
        </div>

            <!-- content1 -->
<!--
            <div class="sermon_feature">
                <h4>Advent</h4>
                <p>3 Weeks: Jan 4 - Jan 18, 2015</p>
                <p><a href="">Study Guide </a></p>
            </div>

            <!-- sermon2 -->
<!--
            <div class="sermon">
                <img src="image/sandbags.png" alt="sermon" width="350px" height="150px"/><p>View Series ></p>
            </div>

                    <!-- content2 -->
<!--
            <div class="sermon_feature">
                <h4>Sandbags + Sandwiches</h4>
                <p>1 Weeks: Dec 28 - Dec 28, 2014</p>
                <p>Study Guide ></p>
            </div>
        </div><!--close media-->
    </div><!--close wrapper-->


    <!--footer -->
    <div class="footer">
        <footer id="myfnavs" class="navbar">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" id="myfnavs1" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div id="fnavbar" class="navbar-collapse collapse">
                    <ul id="fnavs" class="nav navbar-nav">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="location.html">Location</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="ministries.html">All Ministries</a></li>
                        <li><a href="resources.html">Resources</a></li>
                        <li><a href="serve.html">WeServ</a></li>
                        <li><a href="give.html">Give Online</a></li>
                    </ul>
                </div>
            </div>
        </footer><!--close footerTop -->


        <footer class="footerBottom">
            <div class="fLocation">
                Shalom of Bay City <span class="delimiter"> | </span> <a href="tel">989.894.9972</a><br>
                304 South Dean Street <span class="delimiter"> | </span> Bay City,       MI     48706  <span class="delimiter">|</span> United States            <br />
                 <span class="legal">
                <p>Shalom of Bay City is a fictional church created by Angelica M. Dinh for Final Project at FullSail University.</p>
                 </span>
            </div>
        </footer>
    </div><!--close footer -->
</div><!--close container-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-player.js"></script>
<script src="js/main.js"></script>


<!--plugin-->
<script src="../js/jquery.fileupload-process.js"></script>
<script src="../js/jquery.fileupload-image.js"></script>
<script src="../js/jquery.fileupload-audio.js"></script>
<script src="../js/jquery.fileupload-video.js"></script>
<script src="../js/jquery.fileupload-validate.js"></script>
<script src="../js/jquery.fileupload-ui.js"></script>
<script>

</body>

</html>