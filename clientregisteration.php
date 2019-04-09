<?php

require_once("config.php");

//Prevent the user visiting the logged in page if he/she is already logged in
// if(isUserLoggedIn()) {
	// header("Location: myaccount.php");
	// die();
// }

//Forms posted
if(!empty($_POST)) {
	$errors = array();
   
    $username = trim($_POST["username"]);
	$firstname = trim($_POST["fname"]);
	$lastname = trim($_POST["lname"]);
    $password = trim($_POST["password"]);
    $age = trim($_POST["age"]);
	$gender = trim($_POST["gender"]);
    $address = trim($_POST["address"]);
    $avataar = "images/".trim($_POST["avataar"]);

	
	if($username == "") {
		$errors[] = "enter valid username";
	}
	
	if($firstname == "") {
		$errors[] = "enter valid first name";
	}
	
	if($lastname == "")
	{
		$errors[] = "enter valid last name";
	}
	
	
	if($password =="") {
		$errors[] = "enter password";
	}
	// else if($password != $confirm_pass) {
	// 	$errors[] = "password do not match";
	// }
	
	//End data validation
	if(count($errors) == 0) {
        //echo "No errors";
		$user = createNewClient($username, $firstname, $lastname, $password, $age, $gender, $address, $avataar);
		print_r($user);
		if($user <> 1) {
			$errors[] = "registration error";
		}
    }
   
	if(count($errors) == 0) {
		$successes[] = "registration successful";
	}

}

//require_once("header.php");

?>

<style>
     body{
        font-family: AvenirLTStd-Medium,Arial,sans-serif;
    /* font-size:14px; */
     }
  .reg-wrapper{
      display:grid;
      grid-template-columns:repeat(12,1fr);
      grid-template-rows:auto;
      /* grid-gap:20px; */
  }
  .leftside{
      grid-column:span 6;
        height:100%;
      background-color:gold;
  }
  
  .rightside{
      grid-column:span 6;
      background: linear-gradient(to bottom right, gold,#0BB5FF, #660099); /* Standard syntax (must be last) */

      /* background-color:gold; */
  }
  .reg-details{
      margin:40px 40px 40px 40px;
  }
input{
    border: 0;
    border-bottom: 1px solid #ddd;
    font-size: 20px;
    font-family: AvenirLTStd-Medium,Arial,sans-serif;
    padding: 20px 0 0 5px;
    background-color: transparent;
    border-radius: 0;
    /* font-weight:bold; */
}
::placeholder{
    color:red;
}
.common
  {
      background-color: #ea5033;
      color:white;
      border: 2px solid #ea5033;
      padding: 15px 30px;
      font-size: 1.1em;
      line-height: 1em;
      border-radius:50px;
  }

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
    
    </style>
    <body>

            <!-- <img id="blah" src="../images/logo/<?php echo $query_general_setting['g_logo'];?>" alt="your Logo" height="100" /> -->
            <div style="width: 100%;background-size:cover; background-repeat: no-repeat;" id="first">
                <ul>
                    <span id="tt" style="padding-left: 40px">Yoga<span style="color:orangered">Hub</span></span>
                    <li><a href="teacherregisteration.php">INSTRUCTOR REGISTRATION</a></li>
                    <li><a class="active" href="clientregisteration.php">CLIENT REGISTRATION</a></li>
                    <li><a class="button button3" href="login.php">LOG IN</a></li>
                    <li><a  href="about.php">ABOUT US</a></li>
                    <li><a href="teachers.php">OUR TEACHERS</a></li>
                    <li><a   href="home.php">HOME</a></li>
                </ul>
            </div>
<div class="reg-wrapper">
<div class="leftside">
    <img src="images/register1.gif">
</div>
<div class="rightside">
    <div class="reg-details">
<!--    <blockquote>-->
<!--				--><?php //print_r($errors); ?>
<!--				--><?php //print_r($successes); ?>
<!--			</blockquote>-->
<!--			-->
			<form name="newUser" action="<?php $_SERVER["PHP_SELF"]; ?>" method="post">
                <h2>YOU'RE JUST ONE STEP AWAY FROM YOUR 15 DAY FREE TRIAL!</h2>

        <p>
            <input name="username" value="" placeholder="Enter Username"/>
        </p>

        <p>
            <input type="text" name="fname" value="" placeholder="Enter First Name"/>
        </p>

        <p><input type="text" name="lname" value="" placeholder="Enter Last Name"/></p>

        <p><input type="password" name="password" value="" placeholder="Enter Password"/></p>

        <p><input type="text" name="age" value="" placeholder="Enter Age"/></p>

        <p><input type="text" name="gender" value="" placeholder="Enter Gender"/></p>

        <p><input type="text" name="address" value="" placeholder="Enter Address"/></p>

        <img id="blah" src="images/avataar3.jpg" alt="your image" height="100" />

        <input type="file" class="" name="avataar" id="imgInp" /><br><br>
        
       <center> <input type="submit" class="common" value="register"> </input></center>
</form>

    </div>
</div>


</div>
            <div class="footer">
                <?php
                require_once("footer.php");
                ?>
            </div>
    </body>

