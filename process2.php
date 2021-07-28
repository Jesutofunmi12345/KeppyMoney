<?php

//initialize the session
if (!isset($_SESSION)) {
  session_start();
}

//require_once('./Connections/MMM.php');
require_once("includes/config.php");
//mysql_select_db($database_MMM, $MMM);

//$email = $_POST['memberid'];
$email = $_POST['email'];
$package = $_POST['status'];

  
//$query = "SELECT * FROM register WHERE Email = '$email' " or die("error");
$query = "SELECT * FROM users WHERE userEmail = '$email' " or die("error");
//mysql_select_db('register');

$sql = mysql_query($query) or die("You are logged out");

 while($row = mysql_fetch_array($sql)) {
	 	 
	 $id  = $row['id']; 	
	 $fullname = $row['FullName'];  	
	 //$Username = $row['Username'];  	
	 $phone = $row['contactNo']; 	
	 $email = $row['userEmail'];  	
	 $password = $row['password']; 	
	 $bank = $row['bank'];
	 $accountNo = $row['accountNo']; 	
	 //$Matched = $row['Matched'];  	
	 //$ReceiveMoney = $row['ReceiveMoney']; 	
	 $package =  $row['package'];
	 //$Status =  $$row['Status'];
}
	 
	 $amount = '';
	 
	 if($package == "starter")
	 {
		$amount = 'N20,000'; 
		 $query_2 = "UPDATE users SET package = 'starter' WHERE userEmail = '$email' ";
	 	 $sql_2 = mysql_query($query_2);
	 	 echo "<script>alert('You have successfully chosen Starter!'); window.location='dashboard.php'</script>"
		 //include("starter.php");
	 }
	 
	 else
		 if($package == "bronze")
			 {
				$amount = 'N50,000';
		 $query_2 = "UPDATE users SET package = 'Bronze' WHERE userEmail = '$email' ";
	 	 $sql_2 = mysql_query($query_2);
	 	 echo "<script>alert('You have successfully chosen Bronze!'); window.location='dashboard.php'</script>"
				 //include("bronze.php");
			 }
	 else
		if($package == "gold")
			 {
				$amount = 'N100,000'; 
		 $query_2 = "UPDATE users SET package = 'Gold' WHERE userEmail = '$email' ";
	 	 $sql_2 = mysql_query($query_2);
	 	 echo "<script>alert('You have successfully chosen Gold!'); window.location='dashboard.php'</script>"
				 //include("gold.php");
			 }
	 else
		 if($package == "diamond")
			 {
				$amount = 'N200,000';
		$query_2 = "UPDATE users SET package = 'Diamond' WHERE userEmail = '$email' ";
	 	 $sql_2 = mysql_query($query_2); 
	 	 echo "<script>alert('You have successfully chosen Diamond!'); window.location='dashboard.php'</script>"
				 //include("diamond.php");
			 }
	  
	else
{
  header("location:mypackages.php?msg=package not verified");
}

?>