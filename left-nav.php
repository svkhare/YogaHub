<?php
//Links for logged in user
if(isUserLoggedIn()) { ?>
    <ul>
        <li><a href="TryUsCancelAnytime.php"> Home</a></li>
        <li><a href="teachers.php">View All Teachers</a> </li>
        <li><a href="logout.php">Logout</a></li>
    </ul>

<?php }
//Links for users not logged in
else { ?>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="login1.php">Login</a></li>
        <li><a href="register.php">Register</a></li>
    </ul>
<?php } ?>