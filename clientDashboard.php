<?php

// require_once("header.php");
// echo "@@@@@@@@@@@@@@@@";

require_once("config.php");
$allTeachers = fetchAllTeachers();

$userid=$loggedInUser->user_id;
// echo "@@@@@@@@@@@@@@@@";
// echo $userid;

// $userdetails = fetchUserDetails($username);

?>
<style>
body {
  margin: 0 auto;
  

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
    font-size: 20px;
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

.sidebar {
    grid-column:span 3 ;   
        border:3px inset green;
        background: #d9d9d9;

    }

    .content {
        padding-top: 20px;
        padding-left: 10px;
        margin-right: 50px;
        grid-gap:20px;
        grid-column:span 9;   
        line-height:1.5em;
    }

    .header {
        grid-column:span 12;   
    }

    .footer {
        grid-column:span 12;   
    }


    .wrapper {
        display: grid;
        grid-gap: 10px;
        grid-template-columns: repeat(12,1fr);
        grid-template-rows:auto;
         background-color: #fff;
        color: #444;
    }


.box {
  background-color: #444;
  color: #fff;
  border-radius: 5px;
  padding: 10px;
  font-size: 150%;
}

.header,
.footer {
  background-color: #999;
}
.main-teachermenu{
    width:100%;
}
.column {
   /*border:1px solid blue;*/
  /*width:45%;*/
  float:left;
   margin:10px 15px 10px 15px;
   /*background: #d9d9d9;*/
}

.column1{
    float:left;
    width:20%;
}
.row1:after {
    content: "";
    display: table;
    clear: both;
}
.img {
    /* padding-top: 20px; */
    width:100px;
    height:100px;
    border-radius: 50%;
    border:2px solid black;
  }
</style>

<div id="first">

    <div><ul>
            <span id="tt" style="padding-left: 40px">Yoga<span style="color: orangered">Hub</span></span>

            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
</div>

<div class="wrapper">
  <div class="header">
  
  </div>
  <div class="sidebar">
    <div class="main-teachermenu">
        <div class="row">
            <?php foreach($allTeachers as $teacherinfo) 
            {?>
                <div class="column">    
                    <center>
                        <a href="teacherinfo.php?UserID=<?php print $teacherinfo['UserID']; ?>">
                        <img src="<?php print $teacherinfo['avataar']; ?>" class="img">
                        <p class="trainername"><?php print ucfirst($teacherinfo["firstname"]) . " " . ucfirst($teacherinfo["lastname"]) ?></p>
                        </a>
                        <p class="mediumfontsize"><?php print $teacherinfo["address"] ?> </p>
                    </center>
                </div>                             
            <?php } ?>
        </div>
    </div>
  </div>

  <div class="content">
    <header style="color:red;font-weight:bold;font-size:30px;padding-bottom:20px;">Hey! <?php print  ucfirst($loggedInUser->username)?> Welcome to YogaHub!!!</header>

    <div style="text-align: justify; font-size:20px;">
    <b>YogaHub is yoga for everyone.</b> <span style="color:grey;">It is an invitation to explore our bodies, minds, and hearts. We invest in you and your commitment to self-care.</style></span><br><br>
    <b>We believe that yoga is a lifelong process.</b> <span style="color:grey;">That process begins as soon as we recognize that we all share the same human condition.</style></span><br><br>
    <b>Our intention is to empower people from all around the world to practice and expand the meaning of yoga.</b><span style="color:grey;"> We're committed to practices that invite our deepest
        self-exploration and investment in our shared humanity. We offer thousands of professionally-filmed online yoga, meditation, and lecture classes taught by experienced,
        certified yoga teachers, and professors in an effort to touch lives in a meaningful way.
    </div>
  <div>       
   <?php
   $teacher=fetchThisClient($userid); 
   if(!empty($teacher)){
        foreach($teacher as $teacherinfo) 
        {
                // echo $teacherinfo['instructorname'];
                GLOBAL $instructorid;
                $instructorid = $teacherinfo['instructorname'];
        }
        if($instructorid <> "" ) 
            require_once("connected.php");           
    }

    ?>
   </div>
   
   <div class="card">
    <?php 
    $username=$loggedInUser->username;
    $userdetails = fetchUserDetails($username);   
    $userrole = $userdetails["userrole"];    
    // echo $userrole;        
    if($userrole == "teacher")
    {
        $foundClients = fetchAllClientsList($userid);
        if(!empty($foundClients))
        {
        foreach($foundClients as $clientinfo) 
        {?>
            <div class="column1">    
                <img src="<?php print $clientinfo['avataar']; ?>" class="img"  style="width:50%;border:2px">
                <h3 style="color:red;"><?php print $clientinfo["fname"] . " " . $clientinfo["lname"] ?></h3>
                <p><?php print $clientinfo['address']; ?></p>
            </div>
        <?php } ?>
        <?php } ?>
        <?php } ?>

</div>

 
    </div>
   
  <div class="footer">
    <?php require_once("footer.php"); ?>
  </div>
</div>