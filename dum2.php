<?php

echo "Teachers Information";
require_once("config.php");

$teacherID = $_GET['uid'];
//echo $teacherID;


$foundTeacher = fetchThisTeacher($teacherID);
// echo "<pre>";
//   print_r($foundTeacher);
// echo "</pre>";
require_once("header.php");
?>

<?php foreach ($foundTeacher as $teacherdetails) { ?>
<div class="main-heading"> 
    <p>About: <?php echo $teacherdetails['firstname'] . " " . $teacherdetails['lastname'] ?></p>
    <div>
        <img src="<?php echo $teacherdetails['avataar'] ?>" class="img-1" >
    </div>

    <div>
    </div>

</div>
<div>
<div class="col1">
    <img src="<?php echo $teacherdetails['avataar'] ?>" class="img">
</div>
<?php } ?>

<div class="col2">

  <?php foreach ($foundTeacher as $teacherdetails) { ?>
  
    <p>Name: <?php print $teacherdetails['firstname']. " " . $teacherdetails['lastname'] ?></p>
    <p>Username: <?php print $teacherdetails['username']; ?></p>
    <p>Year of experience: <?php print $teacherdetails['experience']; ?></p>
    <p>Gender: <?php print $teacherdetails['gender']; ?></p>
    <p>Working Hours: <?php print $teacherdetails['timeslots']; ?></p>

<?php } ?>
<div class="col3">

  <?php foreach ($foundTeacher as $teacherdetails) { ?>  
    <p>Description: <br><br><?php print $teacherdetails['description']; ?></p>
<?php } ?>

</div>
</div>
