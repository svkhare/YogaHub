<?php

require_once("config.php");

$allTeachers = fetchAllTeachers();
require_once("header.php");

?>
<div class="teacher-heading">
<center>
    <h1>Get to know our teachers</h1>
    <p>"Our classes are taught by world-class, experienced, and certified teachers who embody yoga and teach with an intimate understanding of the classic yoga texts and various yoga traditions, whose devotion, lives and teachings are their art."</p>
    <a href="" class="common">Start Your 15 day Trial Today</a>
</center>
</div>

<div class="row">
<?php foreach($allTeachers as $teacherinfo) 
{?>
<div class="column">    
    <center>
    <a href="teacherinfo.php?uid=<?php print $teacherinfo['uid']; ?>">
        <img src="<?php print $teacherinfo['avataar']; ?>" class="img">
        <p class="trainername"><?php print $teacherinfo["firstname"] . " " . $teacherinfo["lastname"] ?></p>
    </a>
    <p class="mediumfontsize"><?php print $teacherinfo["address"] ?> </p>
    </center>
    </div>                             
    <?php } ?>

</div>

<?php
//require_once("footer.php");
?>



<div class="wrapper">
  <div class="box header">Header</div>
  <div class="box sidebar">Sidebar</div>
  <div class="box sidebar2">Sidebar 2</div>
  <div class="box content">Content
    <br /> More content than we had before so this column is now quite tall.</div>
  <div class="box footer">Footer</div>
</div>
