<?php

require_once("config.php");
//Prevent the user visiting the logged in page if he/she is already logged in
//echo "&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&";
//echo $isUserLoggedIn;
if(isUserLoggedIn()) {
   // echo "++++++++++++++++++++++++++++++++++++++++";
    header("Location: clientDashboard.php");
    die();
}

//Forms posted
if(!empty($_POST)) {
    $errors = array();
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    //Perform some validation

    if($username == "") {
        $errors[] = "enter username";
    }

    if($password == "") {
        $errors[] = "enter password";
    }

    if(count($errors) == 0) {
       // echo "helloooooooooooooooooooooooooooooooooooooooooooooooooooooo";
        //retrieve the records of the user who is trying to login
        echo "$username";

        $userdetails = fetchUserDetails($username);
        //echo "###################################################3333hdhklrjfjk";
        echo $userdetails;
        //See if the user"s account is activated
        // if($userdetails["Active"] == 0) {
        // 	$errors[] = "account inactive";
        // } else {
        // 	//Hash the password and use the salt from the database to compare the password.
        $entered_pass = generateHash($password, $userdetails["password"]);

        if($entered_pass != $userdetails["password"]) {
            $errors[] = "invalid password";
        } else
        {
            //Passwords match! we"re good to go"
            $loggedInUser = new loggedInuser();
            // $loggedInUser->email = $userdetails["Email"];
            $loggedInUser->user_id = $userdetails["UserID"];

            $loggedInUser->user_role = $userdetails["userrole"];

            $loggedInUser->username = $userdetails["username"];

            $loggedInUser->hash_pw = $userdetails["password"];

            // $loggedInUser->first_name = $userdetails["FirstName"];
            // $loggedInUser->last_name = $userdetails["LastName"];

            //pass the values of $loggedInUser into the session -
            // you can directly pass the values into the array as well.

            $_SESSION["ThisUser"] = $loggedInUser;
            //echo "PPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPP";
            //now that a session for this user is created
            //Redirect to this users account page
            header("Location: clientDashboard.php");
            die();
            // }
        }
    }
}

?>
<html>
<head><title>login</title>
<style>
    .buttonsubmit {
        background-color:darkgreen;
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

    #content{
        width:100%;
        height:100%;

        /* background: gold; */

    }
    #main{
        width:35%;
        height:100%;
        float:left;
        border:1px solid black;
        padding-left:200px;
        /* background: red; For browsers that do not support gradients */
        background: linear-gradient(to bottom right, #ea5033, gold); /* Standard syntax (must be last) */


    }
    #loginimage{
        width:49%;
        height:100%;
        float:left;

        /* background: orangered; */

    }
    #lfb
    {
        position:relative;
        height:281px;
        width:450px;
        margin:0 auto;
    }
    #lfb img
    {
        width:200px;
        height:200px;
        position:absolute;
        left:0;
        /* background-image: url("images/leftlogin.jpg"); */

        border-radius:50%;
        -webkit-transition: opacity 1s ease-in-out;
        -moz-transition: opacity 1s ease-in-out;
        -o-transition: opacity 1s ease-in-out;
        transition: opacity 1s ease-in-out;
    }
    @keyframes lfb3FadeInOut
    {
        0% {  opacity:1;}
        45% {opacity:1;}
        55% {opacity:0;}
        100% {opacity:0;}}

    #lfb img.top
    {
        animation-name:lfb3FadeInOut;
        animation-timing-function: ease-in-out;
        animation-iteration-count: infinite;
        animation-duration: 2s;
        animation-direction: alternate;
    }

    #logincredentials{
        position:relative;
        height:330px;
        width:400px;
        margin:0 auto;
        text-shadow: red;
    }
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
</style>
</head>
<body>
<?php //require_once("header.php"); ?>
<div id="first">

    <div><ul>
            <span id="tt" style="padding-left: 40px">Yoga<span style="color: orangered">Hub</span></span>
            <li><a href="teacherregisteration.php">INSTRUCTOR REGISTRATION</a></li>
            <li><a  href="clientregisteration.php">CLIENT REGISTRATION</a></li>
            <li><a class="active" class="button button3" href="login.php">LOG IN</a></li>
            <li><a  href="about.php">ABOUT US</a></li>
            <li><a href="teachers.php">OUR TEACHERS</a></li>
            <li><a href="home.php">HOME</a></li>
        </ul></div>
</div>
<div id="content-wrap">
    <div id="content">
        <div id="main">
<!--            <blockquote>-->
<!--                --><?php //print_r($errors); ?>
<!--            </blockquote>-->


            <form name="login" action="<?php $_SERVER["PHP_SELF"]; ?>" method="post">
                <div id="lfb">
                    <img class="bottom" src="images/avataar.png" />
                    <img class="top" src="images/avataar2.png" />
                </div>
                <div id="logincredentials">
                    <p>
                    <p style="height: 40px; width: 150px"><input type="text" name="username" placeholder="Username"/></p>
                    </p>

                    <p>
                        <input type="password" name="password" placeholder="Password" class="redcolor"/>
                    </p>

                    <p>
                        <label>&nbsp;</label>
                        <input  style="margin-left: 25px" type="submit" value="Login"  class="buttonsubmit" /><br>
                      <br><br>
                        <a href="teacherregisteration.php">Teacher Registration</a><br>

                        <a href="clientregisteration.php">Client Registration</a><br><br>

                    </p>
                </div>

            </form>
        </div>
        <div id="loginimage">
            <img src="images/login.jpg" style="width:100%;height:100%;">
        </div>

        <div class="footer" style="clear: both">
            <?php
            require_once("footer.php");
            ?>
        </div>
        <!-- <?php require_once("footer.php"); ?> -->
</body>
</html>