<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {font-family: Arial, Helvetica, sans-serif;
            background-color:#f2f2f2;}

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
            height: 60px;
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
            text-decoration: underline;
            text-decoration-color: red;
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


        input[type=text], select, textarea {
            width: 60%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        input[type=email] {
            width: 60%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }


        input[type=submit] {
            background-color: orange;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }
        .buttonsubmit {
            background-color:orangered;
            border: none;
            color: white;
            padding: 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 15px;
        }

    </style>
</head>
<body>

<div id="first">

    <ul>
        <span id="tt" style="padding-left: 40px">Yoga<span style="color: orangered">Hub</span></span>
        <li><a  href="teacherregisteration.php">INSTRUCTOR REGISTRATION</a></li>
        <li><a  href="clientregisteration.php">CLIENT REGISTRATION</a></li>
        <li><a class="button button3" href="login.php">LOG IN</a></li>
        <li><a  href="about.php">ABOUT US</a></li>
        <li><a href="teachers.php">OUR TEACHERS</a></li>
        <li><a href="home.php">HOME</a></li>
    </ul></div><br><br>


<center><h3 style="font-family:Arial ">Contact Form</h3></center>
<label for="fname" style="padding-left: 270px;font-family:AvenirLTStd-Medium">First Name</label><br>
<center><input type="text" id="fname" name="firstname" placeholder="Your name.."><br></center>

<label for="lname" style="padding-left: 270px;font-family:AvenirLTStd-Medium">Last Name</label><br>
<center><input type="text" id="lname" name="lastname" placeholder="Your last name.."><br></center>

<label for="email" style="padding-left: 270px;font-family:AvenirLTStd-Medium">Email</label><br>
<center><input type="email" id="email" name="email" placeholder="Your email address.."><br></center>

<label for="country" style="padding-left: 270px;font-family:AvenirLTStd-Medium">I need help with</label><br>
    <center><select id="country" name="country">
    <option value="registartion">Registration</option>
    <option value="technical support">Technical Support</option>
    <option value="account">My account/billing</option>
</select><br></center>

<label for="subject" style="padding-left: 270px;font-family:AvenirLTStd-Medium">Subject</label><br>
<center><textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea><br></center>

<center><input type="submit" value="Submit" class="buttonsubmit"></center>
</form>
</div>
<div class="footer">
    <?php
    require_once("footer.php");
    ?>
</div>
</body>
</html>
