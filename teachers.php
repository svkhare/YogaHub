<?php

require_once("config.php");

$allTeachers = fetchAllTeachers();
//require_once("header.php");

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <style>
        #first{
            background-color: #f9f9f9;
        }

        #tt
        {
            font-family: forte, Helvetica, sans-serif;
            font-size: 27px;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #f9f9f9;
        <!--position:fixed;-->
            width: 100%;
            height:60px;
            padding-top: 10px;
        }

        li {
            float: right;
            padding-right: 30px;
        }

        li a {
            display: block;
            color: black;
            text-align: center;
            padding: 10px 12px;
            text-decoration: none;
        }

        li a:hover
        {
            color:orange;
            text-decoration:underline;
        }

        li a:hover:not(.active) {
            background-color: #orange;
        }

        .active {
            background-color: #4CAF50;
        }
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #f9f9f9;
        <!--position:fixed;-->
            width: 100%;
            height:60px;
            padding-top: 10px;
        }

        li {
            float: right;
            padding-right: 30px;
        }

        li a {
            display: block;
            color: black;
            text-align: center;
            padding: 10px 12px;
            text-decoration: none;
        }

        li a:hover
        {
            color:orange;
            text-decoration:underline;
        }

        li a:hover:not(.active) {
            background-color: #orange;
        }

        .active {
            background-color: #4CAF50;
        }
        .button {

            border: none;
            color: white;
            padding: 10px 12px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
        <!--font-size: 16px;-->
            margin: 10px 15px;
            -webkit-transition-duration: 0.4s; /* Safari */
            transition-duration: 0.4s;
            cursor: pointer;
            border-radius:20px;
        }


        .button3 {
            background-color: white;
            color: black;
            border: 2px solid orange;

        }

        .button3:hover {
            background-color: orange;
            color: white;
            border-radius:25px;
        }

        .button2 {
            background-color: orange;
            color: white;
            border: 2px solid orange;
        }

        .button2:hover {
            background-color: red;
            color: white;
            border: 2px solid red;
        }



        body {
            margin: 0 auto;
            font-family: AvenirLTStd-Medium,Arial,sans-serif;
            /* font-size:24px; */
            line-height:1.5em;

        }
        .common
        {
            background-color: #ea5033;
            color:white;
            border: 3px solid #ea5033;
            padding: 15px 30px 15px 30px;
            font-size: 1.1em;
            line-height: 1em;
            text-decoration:none;
            border-radius: 50px;

        }

        .wrapper{
            display:grid;
            grid-template-columns:repeat(12,1fr);
            grid-template-rows:auto;
            grid-gap:20px;
        }
        .header{
            grid-column:span 12;
            background-color:white;

        }
        .content2{
            grid-column:span 12;
            background-color:white;
            align:center;
            /* height:1000px; */
            /* border:11px solid #f9f9f9; */
        }
        .content{
            grid-column:span 12;
            background-color:#d9d9d9;

        }

        .trainername{
            color: #ea5033;
            font-weight: bold;
            font-size: 22px;
            text-decoration:none;
            line-height:0.5em;
        }

        .footer{
            grid-column:span 12;
            background-color:black;
            color:white;
        }

        .column {
            /*border:2px solid; */
            width:22%;
            float:left;
            margin:10px 15px 10px 15px;
            padding:5px;
            background: #d9d9d9;
        }
        .row1:after {
            content: "";
            display: table;
            clear: both;
        }
        
        .img {
            padding-top: 20px;
            width:250px;
            height:250px;
            border-radius: 50%;

        }
        #content2-img{
            height:300px;

        }
        #content2-1{
            width:50%;
            float:left;
        }
        .mediumfontsize{
            font-size:18px;
            line-height:0.5em;
        }

    </style>
</head>
<body>
<div id="first">
    <div><ul>
            <span id="tt" style="padding-left: 40px">Yoga<span style="color: orangered">Hub</span></span>
            <li><a href="teacherregisteration.php">INSTRUCTOR REGISTRATION</a></li>
            <li><a  href="clientregisteration.php">CLIENT REGISTRATION</a></li>
            <li><a  class="button button3" href="login.php">LOG IN</a></li>
            <li><a  href="about.php">ABOUT US</a></li>
            <li><a class="active" href="teachers.php">OUR TEACHERS</a></li>
            <li><a href="home.php">HOME</a></li>
        </ul></div>
</div>

<div class="wrapper">
    <div class="header" style="padding-bottom:50px">
        <center>
            <h1>Get to know our teachers</h1>
            <p>"Our classes are taught by world-class, experienced, and certified teachers who embody yoga and teach with an intimate understanding of the classic yoga texts and various yoga traditions, whose devotion, lives and teachings are their art."</p><br>
            <a href="clientregisteration.php" class="common">Start Your 15 day Trial Today</a>
        </center>
    </div>

    <div class="content">
        <div class="row">
            <?php foreach($allTeachers as $teacherinfo)
            {?>
                <div class="column">
                    <center>
                        <a href="teacherinfo.php?UserID=<?php print $teacherinfo['UserID']; ?>">
                            <img src="<?php print $teacherinfo['avataar']; ?>" class="img">
                            <p class="trainername"><?php print $teacherinfo["firstname"] . " " . $teacherinfo["lastname"] ?></p>
                        </a>
                        <p class="mediumfontsize"><?php print $teacherinfo["address"] ?> </p>
                    </center>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="content2">
        <!-- <div id="content2-1">
            <center><img src="images/download1.jpg" id="content2-img"></center>
        </div>
        <div id="content2-1">
        <center><h1>Try us out. Cancel Anytime.</h1><br><br>
            <a href="" class="common">Start Your 15 day Trial Today</a></center>
        </div> -->

        <?php
        require_once("TryUsCancelAnytime.php");
        ?>
    </div>

    <div class="footer">
        <?php
        require_once("footer.php");
        ?>
    </div>
</div>