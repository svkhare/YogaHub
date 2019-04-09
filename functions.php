<?php

function fetchAllTeachers()
{
    //echo "fetchAllTeachers Start";
    global $mysqli, $db_table_prefix;
    $stmt = $mysqli->prepare("SELECT
		UserID,
		username,
		firstname,
		lastname,
		password,
		email,
		experience,
		gender,
		address,
		age,
		days,
		timeslots,
		avataar,
		status,
		description
		FROM " . $db_table_prefix . "teachers
		");

    $stmt->execute();
    $stmt->bind_result($UserID, $username, $firstname, $lastname, $password, $email, $experience, $gender, $address, $age, $days, $timeslots,$avataar,$status,$description);
    while($stmt->fetch()) 
    {
        $row[] = array('UserID' => $UserID,
            'username' => $username,
            'firstname' => $firstname,
            'lastname' => $lastname,
            'password' => $password,
            'email' => $email,
            'experience' => $experience,
            'gender' => $gender,
            'address' => $address,
            'age' => $age,
            'days' => $days,
            'timeslots' => $timeslots,
            'avataar' => $avataar,
            'status' => $status,
            'description' => $description
        );
    }
    $stmt->close();
    return ($row);
}

function fetchThisTeacher($UserID)
{
    global $mysqli, $db_table_prefix;
    $stmt = $mysqli->prepare(
        "
    SELECT
    UserID,
		username,
		firstname,
		lastname,
		password,
		email,
		experience,
		gender,
		address,
		age,
		days,
		timeslots,
		avataar,
		status,
		description		
    FROM " . $db_table_prefix . "teachers
    WHERE
    UserID = ?
    LIMIT 1"
    );
    $stmt->bind_param("s", $UserID);
    $stmt->execute();
    $stmt->bind_result(
        $UserID,
        $username,
        $firstname,
        $lastname,
        $password,
        $email,
        $experience,
        $gender,
        $address,
        $age,
        $days,
        $timeslots,
        $avataar,
        $status,
        $description
    );
    $stmt->execute();
    while ($stmt->fetch()) {
        $row[] = array(
            'UserID' => $UserID,
            'username' => $username,
            'firstname' => $firstname,
            'lastname' => $lastname,
            'password' => $password,
            'email' => $email,
            'experience' => $experience,
            'gender' => $gender,
            'address' => $address,
            'age' => $age,
            'days' => $days,
            'timeslots' => $timeslots,
            'avataar' => $avataar,
            'status' => $status,
            'description' => $description    );
    }
    $stmt->close();
    return ($row);
}

function isUserLoggedIn()
{
    global $loggedInUser, $mysqli, $db_table_prefix;
    $stmt = $mysqli->prepare("SELECT
		UserID,
		password
		FROM " . $db_table_prefix . "role
		WHERE
		UserID = ?
		AND
		password = ?
		LIMIT 1");
    //echo "############";

    // echo $loggedInUser->user_id, $loggedInUser->hash_pw;
    $stmt->bind_param("is", $loggedInUser->user_id, $loggedInUser->hash_pw);
    $stmt->execute();
    $stmt->store_result();
    $num_returns = $stmt->num_rows;
    $stmt->close();

    if($loggedInUser == NULL) {
       //echo "!!!!!!!!!!!!!!!!!!! loggedInUser null";
        return false;
    } else {
        if($num_returns > 0) {
            //echo "!!!!!!!!!!!!!!!!!!! loggedInUser > 0";
            return true;
        } else {
           // echo "!!!!!!!!!!!!!!!!!!! loggedInUser else section";
            destroySession("ThisUser");
            return false;
        }
    }
    // echo "isUserLoggedIn() end";
}
function destroySession($name)
{
    if(isset($_SESSION[$name])) {
        $_SESSION[$name] = NULL;
        unset($_SESSION[$name]);
    }
}

function generateHash($plainText, $salt = NULL)
{
    if($salt === NULL) {
        $salt = substr(md5(uniqid(rand(), TRUE)), 0, 25);
    } else {
        $salt = substr($salt, 0, 25);
    }
    return $salt . sha1($salt . $plainText);
}

function generateRandomUserID()
{
    $character_array = array_merge(range(a, z), range(0, 9));
    $rand_string = "";
    for($i = 0; $i < 6; $i++) {
        $rand_string .= $character_array[rand(
            0, (count($character_array) - 1)
        )];
    }
    // return $rand_string;
   }

function createNewClient($username, $firstname, $lastname, $password, $age, $gender, $address, $avataar)
{
    global $mysqli, $db_table_prefix;
    //Generate A random userid
    // generateRandomUserID();
    $character_array = array_merge(range(a, z), range(0, 9));
    $rand_string = "";
    for($i = 0; $i < 6; $i++) {
        $rand_string .= $character_array[rand(
            0, (count($character_array) - 1)
        )];
    }

    //echo $rand_string;
    //echo $username;
    //echo $firstname;
    //echo $lastname;
    //echo $email;
    //echo $password;

    $newpassword = generateHash($password);

    // echo $newpassword;
    $blank="";
    $stmt = $mysqli->prepare(
        "INSERT INTO " . $db_table_prefix . "client (
		UserID,
		username,
		fname,
		lname,
		password,
		age,
		gender,
		address,
		instructorname,
		avataar
		)
		VALUES (
		'" . $rand_string . "',
		?,
		?,
		?,
		?,
		?,
		?,
		?,
		'" . $blank . "',
		?
		)"
    );
    $stmt->bind_param("ssssssss", $username, $firstname, $lastname, $newpassword, $age, $gender, $address, $avataar);
    print_r($stmt);
    $result = $stmt->execute();
    print_r($result);
    $stmt->close();

    global $mysqli, $db_table_prefix;
    $role="client";
    $stmt = $mysqli->prepare(
        "INSERT INTO " . $db_table_prefix . "role (
		userid,
		userrole,
		username,password
		)
		VALUES (
		'" . $rand_string . "',
		'" . $role . "',
		?,
		?
		)"
    );
    $stmt->bind_param("ss",$username, $newpassword);
    print_r($stmt);
    $result = $stmt->execute();
    print_r($result);
    $stmt->close();


    return $result;

}

function createNewTeacher($username, $firstname, $lastname, $password, $email, $experience,$gender, $address, $age, $days, $timeslots, $avataar,$description)
{
    global $mysqli, $db_table_prefix;

    //echo "!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!";
    // echo $username, $firstname, $lastname, $password, $email, $experience,$gender, $address, $age, $days, $timeslots, $avataar,$description;
    //Generate A random userid
    // generateRandomUserID();
    $character_array = array_merge(range(a, z), range(0, 9));
    $rand_string = "";
    for($i = 0; $i < 6; $i++) {
        $rand_string .= $character_array[rand(
            0, (count($character_array) - 1)
        )];
    }

    //echo $rand_string;
    //echo $username;
    //echo $firstname;
    //echo $lastname;
    //echo $email;
    //echo $password;

    $newpassword = generateHash($password);

    echo $newpassword;
    $stmt = $mysqli->prepare(
        "INSERT INTO " . $db_table_prefix . "teachers (
		UserID,
		username,
		firstname,
		lastname,
		password,
		email,
		experience,
		gender,
		address,
		age,
		days,
		timeslots,
		avataar,
		status,
		description
		)
		VALUES (
		'" . $rand_string . "',
		?,
		?,
		?,
		?,
		?,
		?,
		?,
		?,
		?,
		?,
		?,
		?,
		1,
		?
		)"
    );
    $stmt->bind_param("sssssssssssss", $username, $firstname, $lastname, $newpassword, $email, $experience,$gender, $address, $age, $days, $timeslots, $avataar,$description);
    print_r($stmt);
    $result = $stmt->execute();
    print_r($result);
    $stmt->close();

    global $mysqli, $db_table_prefix;
    $role="teacher";
    $stmt = $mysqli->prepare(
        "INSERT INTO " . $db_table_prefix . "role (
		userid,
		userrole,
		username,
		password
		)
		VALUES (
		'" . $rand_string . "',
		'" . $role . "',
		?,
		?
		)"
    );
    $stmt->bind_param("ss",$username,$newpassword);
    print_r($stmt);
    $result = $stmt->execute();
    print_r($result);
    $stmt->close();
    // echo "createTeacher Successfully";
    // echo $result;
    return $result;

}

function fetchUserDetails($username)
{
    // echo "@@@@@@@@@@@@@@@@@@@Hey";
    global $mysqli, $db_table_prefix;
    $stmt = $mysqli->prepare("SELECT
		UserID,
		userrole,
		username,
		password
		FROM " . $db_table_prefix . "role
		WHERE
		username = ?
		LIMIT 1");
    //echo "ttttttttttttttttttttttttttttttt" ;
    // echo $username;

    $stmt->bind_param("s", $username);
    //echo "ttttttttttttttttttttttttttttttt" ;

    $stmt->execute();
    $stmt->bind_result($UserID, $userrole, $username, $password);
    // echo "Trial:";
    // echo $UserID, $userrole, $username, $password;
    while($stmt->fetch()) {
        $row = array('UserID' => $UserID,
            'userrole' => $userrole,
            'username' => $username,
            'password' => $password
        );
    }
   
    $stmt->close();
    return ($row);
}

function updateThisRecord($userid)
{
//    echo "updateThisRecord :  1111111111111111111111111111111111";
    global $mysqli, $db_table_prefix, $loggedInUser;
    $stmt = $mysqli->prepare(
        "UPDATE " . $db_table_prefix . "client
		SET
		instructorname = ?
		WHERE
		UserID = ?
		LIMIT 1"
    );
    // print_r($loggedInUser->user_id);
    // echo "updateThisRecord :  1111111111111111111111111111111111";

    $stmt->bind_param("ss", $userid, $loggedInUser->user_id);
    $result = $stmt->execute();
    $stmt->close();

    return $result;
}

function fetchThisClient($UserID)
{
    //echo "$$$$$$$$$$$$$$$$$$$$$$$";
    // echo $UserID;
    global $mysqli, $db_table_prefix;
    $stmt = $mysqli->prepare(
        "
    SELECT
	UserID,
	username,
	fname,
	lname,
	password,
	age,
	gender,
	address,
	instructorname,
	avataar
    FROM " . $db_table_prefix . "client
    WHERE
    UserID = ?
    LIMIT 1"
    );

    $stmt->bind_param("s", $UserID);
    $stmt->execute();
    $stmt->bind_result(
        $UserID,
        $username,
        $fname,
        $lname,
        $password,
        $age,
        $gender,
        $address,
        $instructorname,
        $avataar
    );
    $stmt->execute();

    while ($stmt->fetch()) {
        $row[] = array(
            'UserID' => $UserID,
            'username' => $username,
            'fname' => $fname,
            'lname' => $lname,
            'password' => $password,
            'age' => $age,
            'gender' => $gender,
            'address' => $address,
            'instructorname' => $instructorname,
            'avataar' => $avataar

        );
    }
    $stmt->close();
    return ($row);
}

function fetchAllClientsList($instructorname)
{
    global $mysqli, $db_table_prefix;
    $stmt = $mysqli->prepare("SELECT
		UserID,
		username,
		fname,
		lname,
		password,
		age,
		gender,
		address,
		instructorname,
		avataar
		FROM " . $db_table_prefix . "client
		WHERE
		instructorname = ?
		");

    $stmt->bind_param("s", $instructorname);

    $stmt->execute();
    $stmt->store_result();
    $num_returns = $stmt->num_rows;//echo "mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm";
    // echo $num_returns;//echo "nnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn";
    $stmt->bind_result($UserID, $username, $fname, $lname, $password, $age,$gender, $address, $instructorname,$avataar);
    while($stmt->fetch()) {
        $row[] = array(
            'UserID' => $UserID,
            'username' => $username,
            'fname' => $fname,
            'lname' => $lname,
            'password' => $password,
            'age' => $age,
            'gender' => $gender,
            'address' => $address,
            'instructorname' => $instructorname,
            'avataar' => $avataar
        );
    }

    $stmt->close();
    return ($row);
}
function isTeacherRegistered($userid)
{
    //echo "@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@";
    // echo $userid;
    global $loggedInUser, $mysqli, $db_table_prefix;
    $stmt = $mysqli->prepare("SELECT
		instructorname
		FROM " . $db_table_prefix . "client
		WHERE
		UserID = ?
		");
   // echo "############";

    // echo $loggedInUser->user_id, $loggedInUser->hash_pw;
    $stmt->bind_param("s", $userid);
    $result = $stmt->execute();
    // $stmt->store_result();
    $stmt->close();

    return $result;
}

function isTeacher($userid)
{
    //  echo "@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@";
    //  echo $userid;
     global $loggedInUser, $mysqli, $db_table_prefix;
     $stmt = $mysqli->prepare("SELECT
         userrole
         FROM " . $db_table_prefix . "role
         WHERE
         UserID = ?
         ");
    // echo "############";
 
     // echo $loggedInUser->user_id, $loggedInUser->hash_pw;
     $stmt->bind_param("s", $userid);
     $result = $stmt->execute();
     // $stmt->store_result();
     $stmt->close();
 
     return $result; 
}
?>
