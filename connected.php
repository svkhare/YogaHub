<?php
require_once("config.php");

$UserID=$loggedInUser->user_id;
// echo "66666666666666666666666666666666666666666666666666666";
$foundClient = fetchThisClient($UserID);

foreach ($foundClient as $clientdetails) {
    GLOBAL $clientfirstname;
    GLOBAL $clientlastname;
    GLOBAL $instructorid;
    $clientfirstname=ucfirst($clientdetails['fname']);
    $clientlastname=ucfirst($clientdetails['lname']);
    $clientavataar=$clientdetails['avataar'];
    $instructorid=$clientdetails['instructorname'];
    // echo "mmmmmmmmmmmmmmmmmmm";
// echo $instructorid;

}

$foundTeacher = fetchThisTeacher($instructorid);
foreach ($foundTeacher as $teacherdetails) {
    GLOBAL $teacherfirstname;
    GLOBAL $teacherlastname;
    $teacherfirstname=ucfirst($teacherdetails['firstname']);
    $teacherlastname=ucfirst($teacherdetails['lastname']);
    $teacheravataar=$teacherdetails['avataar'];
    // $instructorid=$teacherdetails['instructorname'];
}

?>
<style>
.clientimg{
    height:220px;
    width:220px;
border-radius:50%;
border:6px solid black;
}

.teacherimg{
height:220px;
width:220px;
border-radius:50%;
border:6px solid black;

}
.arrow{
    height:140px;
    width:320px;
}
.con-main{
    padding:1px;
}
figure{
    display:inline-block;
}
figcaption,header{
    font-size:26px;
    color:red;
}
</style>
<!-- <?php require_once("header.php"); ?> -->
<center>
<div class="con-main">
    <header>You are Connected!!!</header>
    <?php 
    // echo "^^^^^^^^^^^^^^^^^^^^^^^^^";
// echo $clientfirstname;
// echo $teacherfirstname;
// echo "************************************";
?>
<figure>
<img src="<?php print $clientavataar; ?>"  class="clientimg">
<figcaption><?php echo $clientfirstname; ?></figcaption>
</figure>

<img class="arrow" src="images/connected.png" >

<figure>
<img class="teacherimg" src="<?php print $teacheravataar; ?>" >
<figcaption><?php echo $teacherfirstname; ?></figcaption>
</figure>

</div>
</center>