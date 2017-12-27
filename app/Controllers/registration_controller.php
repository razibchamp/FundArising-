<?php session_start(); ?>
<?php require_once "../../data/person_data_access.php"; ?>
<?php require_once "../../data/login_data_access.php"; ?>
<?php
	
	if(count($_GET) == 1)
	{
		$res = findPersonByUserName($_GET['username']);
		
		if(count($res) >= 1)
		{
			echo 1;
		}
		else
		{
			echo 0;
		}
	}
	else
	{
		if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password']))
		{
			$person = array( "name" => $_POST['name'],"email" => $_POST['email'],"username" => $_POST['username'],"password" => $_POST['password']);
		
			addPersonToDb($person);
			
			$userid = findUserIdByUserName($_POST['username']);
			date_default_timezone_set("Asia/Dhaka");
			$date = date('m/d/Y h:i:s a', time()); // to be checked into database
			addLastLoginToDb(array( "userid" => $userid, "last_login" => $date));
			
			
			$_SESSION["userid"] = $userid;
			$_SESSION["username"] = $_POST["username"];
			
			
			require_once "../Views/userprofile.html";
			
		}
			
	}
?>