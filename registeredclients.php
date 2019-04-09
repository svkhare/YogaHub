<?php
require_once("config.php");

// echo "66666666666666666666666666666666666666666666666666666";

$teacherUserID =$_GET['UserID'];

$foundClients = fetchAllClientsList($teacherUserID);

foreach ($foundClients as $clientdetails) 
{
    GLOBAL $clientfirstname;
    GLOBAL $clientlastname;
    GLOBAL $instructorid;
    $clientfirstname=ucfirst($clientdetails['fname']);
    $clientlastname=ucfirst($clientdetails['lname']);
    $clientavataar=$clientdetails['avataar'];
    $instructorid=$clientdetails['instructorname'];
    // echo "mmmmmmmmmmmmmmmmmmm";
// echo $instructorid;
// echo "Client";
// echo "\n";
// echo $clientfirstname;

}

?>
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  /* max-width: 300px; */
  margin: auto;
  text-align: center;
  font-family: arial;
  
}
.column{
    width:22%;
  float:left;
  margin:10px 15px 10px 15px;
  padding:5px;   
  background: #d9d9d9;

}
.title {
  color: grey;
  font-size: 18px;
}
a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

.row:after {
    content: "";
    display: table;
    clear: both;
}
.img {
    padding-top: 20px;
    width:150px;
    height:150px;
    border-radius: 50%;
    
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


.button3 {
background-color: white;
color: black;
border: 2px solid orange;

}
</style>

<?php if(isUserLoggedIn())
{ ?>
<div id="first">

    <div><ul>
            <span id="tt" style="padding-left: 40px">Yoga<span style="color: orangered">Hub</span></span>

            <li><a href="logout.php">Logout</a></li>
        </ul></div>
</div>
                <?php }else { ?> 
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

               <?php } ?>

<h2 style="text-align:center;"><u>Students List</u></h2>

<div class="card">
    <?php foreach($foundClients as $clientinfo) 
    {?>
        <div class="column">    
            <img src="<?php print $clientinfo['avataar']; ?>" class="img"  style="width:50%;border:2px">
            <h1 style="color:red;"><?php print $clientinfo["fname"] . " " . $clientinfo["lname"] ?></h1>
            <p><?php print $clientinfo['address']; ?></p>
        </div>
        <?php } ?>
</div>
<div style="clear: both ; padding-top: 90px">
<?php
require_once("footer.php");
?>
  </div>