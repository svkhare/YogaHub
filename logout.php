<?php
require_once("config.php");

//Log the user out

if(isUserLoggedIn())
{
	destroySession("ThisUser");
}
header("Location:home.php");
die();
?>