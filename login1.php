<?php

require_once("config.php");
//Prevent the user visiting the logged in page if he/she is already logged in
echo $isUserLoggedIn;
if(isUserLoggedIn()) {

	header("Location: clientregisteration.php");
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

		//retrieve the records of the user who is trying to login
		echo "$username";

		$userdetails = fetchUserDetails($username);
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

				//now that a session for this user is created
				//Redirect to this users account page
				header("Location: clientregisteration.php");
				die();
			// }
		}
	}
}

?>

<?php require_once("header.php"); ?>
<div id="content-wrap">
	<div id="content">
		<div id="main">
<!--			<blockquote>-->
<!--				--><?php //print_r($errors); ?>
<!--			</blockquote>-->


            <form name="login" action="<?php $_SERVER["PHP_SELF"]; ?>" method="post">
                <div id="lfb">  
                    <img class="bottom" src="images/avataar.png" />  
                    <img class="top" src="images/avataar2.png" />
                </div>
                <div id="logincredentials">  
				<p>
					<p><input type="text" name="username" placeholder="Username"/></p>
				</p>
				
				<p>
					<input type="password" name="password" placeholder="Password" class="redcolor"/>
				</p>
				
				<p>
					<label>&nbsp;</label>
                    <input type="submit" value="Login" class="submit" /><br>
                    
                    <a href="teacherregisteration.php">Teacher Registration</a><br>
                    
                    <a href="clientregisteration.php">Client Registration</a><br><br>
                </p>
            </div>

			</form>
        </div>
        <div id="loginimage">
            <img src="images/login.jpg" style="width:100%;height:100%;">
        </div>
        <div style="clear: both">
            <?php
            require_once("footer.php");
            ?>

<!-- <?php require_once("footer.php"); ?> -->
