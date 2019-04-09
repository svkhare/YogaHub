<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>Home</title>
    <style>


        #first{
            background-color: #f9f9f9;
        }

        #tt
        {
            font-family: forte, Helvetica, sans-serif;
            font-size: 35px;
        }

        .button {
            border: none;
            color: white;
            padding: 8px 6px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
        <!--font-size: 16px;-->
            margin: 8px 10px;
            -webkit-transition-duration: 0.4s; /* Safari */
            transition-duration: 0.4s;
            cursor: pointer;
            border-radius:20px;
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

        .button3 {
            background-color: white;
            color: black;
            border: 2px solid orange;

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

        .dropbtn {
            background-color: #f9f9f9;
            color: black;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 5px 8px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {background-color: #f1f1f1}

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            background-color: #3e8e41;
        }
</style>
        </head>
<body style="margin: 0 auto">
<div style="background-image:url(yoga.jpg) ; width: 100%;height:130%;background-size:cover; background-repeat: no-repeat;" id="first">
    <ul>
        <span id="tt" style="padding-left: 40px">Yoga<span style="color:orangered">Hub</span></span>
        <li><a href="teacherregisteration.php">INSTRUCTOR REGISTRATION</a></li>
        <li><a  href="clientregisteration.php">CLIENT REGISTRATION</a></li>
        <li><a class="button button3" href="login.php">LOG IN</a></li>
        <li><a  href="about.php">ABOUT US</a></li>
        <li><a href="teachers.php">OUR TEACHERS</a></li>
        <li><a  class="active" href="home.php">HOME</a></li>
    </ul>
    <img src="yogalogo.jpg" height="140px" width="140px" style="padding-top:160px;padding-left:120px">
    <p style="padding-left:70px;padding-top:10px;font-family: AvenirLTStd-Book;font-size: 30px;color:darkslategray">
        <b>Yoga Hub</b> is online yoga<br>
        and meditation you<br>
        can do anywhere
    </p>
</div>
<div style="width: 100%; height: 400px">
   <center><h1 style="padding-top: 20px;font: 35px AvenirLTStd-Book,Arial,sans-serif;color: darkslategrey"> Thousand of classes, at all levels, unlimited</h1></center>
<div style="float: left">
<p style="padding-left:150px; padding-top:60px;font-size:25px; font-family:sans-serif;color: darkslategrey">
    Classes are 15-20 mins long <br><br>
    <b>Cheaper than one class</b> at most studios <br><br>
    No driving . No parking . No stress<br><br>
    On all of your device
</p>
</div>
    <div style="float:left;padding-top:40px;padding-left:50px ">
        <img src="gadgets.jpeg" width="600px" height="60%">
    </div>
</div>
<div style="width: 100%; height:500px;background: linear-gradient(to bottom right,cornflowerblue,burlywood)">
<center><h1 style="font-family: AvenirLTStd-Book; padding-top: 20px;color:white"> Let us find you right classes to start your <b>15 days free trial.</b>
<br><br>
    Are You:</h1><br>
    <div style="float: left; padding-left:160px; padding-top: 50px;border-right: 5px solid white; width: 500px">
        <img src="begineer.gif" width="300px" height="200px" style="border-radius: 50%">
        <h2 style="color: white"> A BEGINEER</h2>
    </div>

    <div style="float: left; padding-left: 150px; padding-top: 50px">
        <img src="expert.gif" width="300px" height="200px" style="border-radius: 50%">
        <h2 style="color: white">EXPERIENCED</h2>
    </div>



</h1> </center>
</div>
<div>
<h1 style="padding-left:50px"> We've got classes for...</h1>

    <div style="float: left">
    <img src="a.jpg" width="666px">

    </div>
    <div style="float:right">
        <img src="b.jpg" width="666px">
    </div>
</div>
<div style="padding-left: 10px;clear: both; font-size: 20px;font-family: sans-serif">
   <span style="padding-left: 10px"> Meditation</span>
    <span style="padding-left: 80px">Begineer</span>
    <span style="padding-left: 90px">Runner</span>
    <span style="padding-left: 140px"> Cyclist</span>
    <span style="padding-left: 80px">Prenatal</span>
    <span style="padding-left: 100px">Travel</span>
    <span style="padding-left: 120px"> Men</span>
    <span style="padding-left: 120px">Women</span>
</div>
<div class="footer">
    <?php
  require_once("footer.php");
?>
</div>
</body>
</html>