<?php 
	session_start();
	if($_SESSION['login']){
		$userEmail=$_SESSION['login'];
	}
	else{
		header("location:dashboard.php");
	}
	$balance=0.00;
	$query=mysqli_query($con,"SELECT * from account WHERE user='$userEmail'");
	while($row=mysqli_fetch_array($query))
		{
			$balance= $balance + $row['amount'];
		}

	  if (isset($_POST['submit']))
            {
            	$amount=mysqli_real_escape_string($_POST['amount']);
            	if($amount>$balance)
		{
			
			echo '<script>alert("You do not have sufficient Funds.");;
			window.location.assign("dashboard.php")</script>';
			exit("You have insufficient funds!");
			//header("location: balance.php");
			
		}
		$amount=(-$amount);
		$details=mysqli_real_escape_string($_POST['details']);
		$time = strftime("%T");
		$date = strftime("%B %d, %Y");

		$query=mysqli_query($con,"INSERT INTO account (amount,date_transaction,details,user) VALUES ('$amount','$date','$details','$user')");
		Print '<script>alert("Successful Withdrawal.");window.location.assign("dashboard.php");</script>';
		
	}
	else
	{
		header("location:deposit.php");
	}


 ?>