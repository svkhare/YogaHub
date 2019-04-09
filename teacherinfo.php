<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<style>
        
  body {
    /* margin: 40px; */
    font-family: AvenirLTStd-Medium,Arial,sans-serif;
    line-height:1em;
  }

  .wrapper{
      display:grid;
      grid-template-columns:repeat(12,1fr);
      grid-template-rows:auto;
      
  }
  .header{
      grid-column:span 12;
      /* background-color:orange; */
  }
  .headerupdate{
      width:25%;
      float:left;
      /* background-color:yellow; */
      margin-left:150px;
     
  }
  .headerupdate1{
      width:55%;
      float:left;
      /* background-color:yellow; */
      margin-left:50px;
     
  }
  #img{
        border-radius:50%;
        width:150px;
        height:150px;
        margin-top:50px;
        margin-right:10px;
  }
  .common
  {
      background-color: #ea5033;
      color:white;
      border: 3px solid #ea5033;
      padding: 15px 30px 15px 30px;
      font-size: 1.1em;
      line-height: 1em;
      text-decoration:none;
      border-radius: 50px;

  }
  #lightPara{
    color: #3c3c3c;
  }
  .name{
    grid-column:span 6;
    /* background-color: #ffffff; */
  }
  .image{
    grid-column:span 6;
  }
  .trainername{
    color: #ea5033;
    font-weight: bold;
    font-size: 22px;
    text-decoration:none;
    line-height:1.5em;

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
.name,.image{
    border-top: 2px solid #f9f9f9;
    border-bottom: 2px solid #f9f9f9;
}
.details{
    margin:10px 250px 10px;
}
.description{
    grid-column:span 12;
    background-color:#d9d9d9;
}
#description{
    margin:20px 150px 20px 150px;
    /* margin-right:150px; */
    /* margin-left:150px; */
    line-height:1.5em;
}

 .content2{
    grid-column:span 12;   
    background-color:white;
    align:center;

    /* border:11px solid #f9f9f9; */
 }

 span{
    animation-name: color_change;
	animation-duration: 1s;
	animation-iteration-count: infinite;
	animation-direction: alternate;
 }
 @-webkit-keyframes color_change {
	from {color: blue; }
	to { color: red; }
}
@-moz-keyframes color_change {
	from { color: blue; }
	to { color: red; }
}
@-ms-keyframes color_change {
	from {color: blue; }
	to {color: red; }
}
@-o-keyframes color_change {
	from { color: blue; }
	to { color: red; }
}
@keyframes color_change {
	from {color: blue; }
	to {color: red; }
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
  </style>
</head>
<body>

 <?php
 require_once("config.php");

 if(isUserLoggedIn())
                { ?>
             
<div id="first">

    <div><ul>
            <span id="tt" style="padding-left: 40px">Yoga<span style="color: orangered">Hub</span></span>

            <li><a href="logout.php">Logout</a></li>
        </ul></div>
</div>
                <?php } 
                else{ ?>
                <div id="first">

<ul>
    <span id="tt" style="padding-left: 40px">Yoga<span style="color: orangered">Hub</span></span>
    <li><a  href="teacherregisteration.php">INSTRUCTOR REGISTRATION</a></li>
    <li><a  href="clientregisteration.php">CLIENT REGISTRATION</a></li>
    <li><a class="button button3" href="login.php">LOG IN</a></li>
    <li><a  href="about.php">ABOUT US</a></li>
    <li><a href="teachers.php">OUR TEACHERS</a></li>
    <li><a href="home.php">HOME</a></li>
</ul></div> 

                <?php }
 ?>


<?php
$teacherID = $_GET['UserID'];
//echo $teacherID;


$foundTeacher = fetchThisTeacher($teacherID);
//require_once("header.php");
?>
 
<div class="wrapper">
  <div class="header">
        <div class="headerupdate">
            <?php foreach ($foundTeacher as $teacherdetails) { ?>
               <?php 
               GLOBAL $firstname;
               GLOBAL $lastname;
               GLOBAL $description;
               GLOBAL $userid;

               $firstname=$teacherdetails['firstname'];
               $lastname=$teacherdetails['lastname'];
               $description=$teacherdetails['description'];
               $userid=$teacherdetails['UserID'];

               ?>
               
 <?php 
    if(isset($_POST['register'])){
     $message= "The insert function is called.";
     $instructorname=$firstname;
    echo "PPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPP";
     $status=updateThisRecord($userid);
     if($status)
    {
        echo "++++++++++++++++++++++++++++++++++++++++";
        header("Location: clientDashboard.php");
        die();    
    }   

    }
    ?>

        <img src="<?php print $teacherdetails['avataar']; ?>" id="img" align="right">
        <?php } ?>
        </div>
        <div  class="headerupdate1">
            <b><p>Take a class with <?php echo $firstname." " . $lastname; ?> - there are unlimited classes to choose from.</p></b>
            <p id="lightPara">Become a <span><b>YogaHub</b></span> member today. For the price of one drop-in class at most yoga studios, you’ll get unlimited access to over classes, taught by our world-class, experienced, and certified teachers.<p>
            <p style="color:green">$18/month | First 15 days free </p><br>
            <a href="" class="common">Start Your 15 day Trial Today</a></center>

        </div>
  </div>
  <div class="name">
            <?php foreach ($foundTeacher as $teacherdetails) { ?>  
               <center><p class="trainername"><?php echo $firstname ." ". $lastname; ?><p></center>
              <div class="details">
               <?php foreach ($foundTeacher as $teacherdetails) { ?>
                <p>Username: <?php print $teacherdetails['username']; ?></p>
                <p>Year of experience: <?php print $teacherdetails['experience']; ?></p>
                <p>Gender: <?php print $teacherdetails['gender']; ?></p>
                <p>Working Hours: <?php print $teacherdetails['timeslots']; ?></p>
                <p><a href="registeredclients.php?UserID=<?php print $userid; ?>">Registered Students List</a></p>
        <?php
if(isUserLoggedIn()){
        $userid=$loggedInUser->username;
        $userdetails = fetchUserDetails($userid);   
        $userrole = $userdetails["userrole"];            
    }
    ?>
    <?php if(isUserLoggedIn() && $userrole == "client")
    { ?>
         <form  name="registerTeacher" action="<?php $_SERVER["PHP_SELF"]; ?>" method="post">
            <p> <input type="submit" class="common" name="register" value="register"> </input>
        </form>
    <?php  } ?>           
    </div>
    <?php } ?>
    <?php } ?>
    </div>


        <div  class="image">
            <center><img src="<?php print $teacherdetails['avataar']; ?>"width="50%"></center>
        </div>
  
  <div class="description">
    <p id="description">
        About <b><u><?php echo $firstname." ". $lastname?>:</u></b><br><br>
        <?php echo $description ?>
    </p>
  </div>
  
  <div class="content2">
    <?php
        require_once("TryUsCancelAnytime.php");
    ?>
</div>
</div>
<div class="footer">
    <?php require_once("footer.php"); ?>
  </div>
</div>

 