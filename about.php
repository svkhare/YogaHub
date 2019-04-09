<html>
<title>About Us</title>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>

        #first{
            background-color: #f9f9f9;
        }

        #tt
        {
            font-family: forte, Helvetica, sans-serif;
            font-size: 35px;
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

        #para{
            font-family: Arial;
            padding-left: 10%;
            padding-right: 10%;
            font-size: 16px;
        }

        #para1{
            text-decoration:underline;
            color:grey;
            font-family: sans-serif;
            padding-left: 10%;
            padding-right: 10%;
        }

        #para2{
            background-color:grey;

        }

        #para4
        {
            color:white;
            padding:20px;
            font-family: sans-serif;
            font-size: 16px;
            width:50%;
            height:40%;
            padding-left: 10%;
            padding-right: 10%;
        }


        #imgTop
        {

            width: 200px;
            padding: 10px;
            display: block;
            float: right;
        }

    </style>
</head>

<body style="margin: 0 auto">
<div id="first">

    <div><ul>
        <span id="tt" style="padding-left: 40px">Yoga<span style="color: orangered">Hub</span></span>
            <li><a href="teacherregisteration.php">INSTRUCTOR REGISTRATION</a></li>
            <li><a  href="clientregisteration.php">CLIENT REGISTRATION</a></li>
        <li><a class="button button3" href="login.php">LOG IN</a></li>
        <li><a class="active" href="about.php">ABOUT US</a></li>
        <li><a href="teachers.php">OUR TEACHERS</a></li>
        <li><a href="home.php">HOME</a></li>
    </ul></div>
</div>


<img src="class.jpg" height="60%" width="100%" style="background-size: cover; margin: 0 auto;">
<br><br><br>
<div id="para" style="padding-top: 25px">
    <b>YogaHub is yoga for everyone.</b> <span style="color:grey;">It is an invitation to explore our bodies, minds, and hearts. We invest in you and your commitment to self-care.</style></span><br><br>
    <b>We believe that yoga is a lifelong process.</b> <span style="color:grey;">That process begins as soon as we recognize that we all share the same human condition.</style></span><br><br>
    <b>Our intention is to empower people from all around the world to practice and expand the meaning of yoga.</b><span style="color:grey;"> We're committed to practices that invite our deepest
self-exploration and investment in our shared humanity. We offer thousands of professionally-filmed online yoga, meditation, and lecture classes taught by experienced,
certified yoga teachers, and professors in an effort to touch lives in a meaningful way.
    </style></span></div><br>

<div id="para1" style="padding-top:10px">
    <p>OUR VISION</p></div>
<h1 id="para" style="font-size:25px">A world in which we all live our true potential.</h1>
<div id="para1" style="padding-top:10px"><p>OUR MISSION</p></div>
<h1 id="para" style="font-size:25px">Create intelligent tools that challenge people to live a fulfilling life.</h1>

<!--<div   style="padding-top:50px; margin-top:10px">-->
<!--    <div id="para2" id="para4" style="float:left;width:690px;padding-left:3%; padding-top:20px">-->
<!--        COME TAKE A CLASS IN OUR STUDIO - IT'S FREE!<br><br>-->
<!--        <p>While our YogaGlo customers are from all over the world, we also have a physical studio in Santa Monica where all of our videos are filmed. If you live in Los Angeles or are visiting, please check the-->
<!--            class schedule to join us while filming - we'd love to have you experience some incredible yoga classes taught by some of the best yoga instructors in the world. A few things to note: </><br><br>-->
<!--    </div>-->
<!--    <div style="float:left;width:600px" id="para2">-->
<!--        <img id="imgTop" src="map.jpg" width="60%" height="22%">-->
<!--    </div>-->
<!--</div>-->
<?php
require_once("footer.php");
?>

</body>
</html>