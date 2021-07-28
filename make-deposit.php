<?php 
	session_start();
	if($_SESSION['login']){
		$userEmail=$_SESSION['login'];
	}
	else{
		header("location:dashboard.php");
	}
	  if (isset($_POST['submit']))
            {
            	$time = strftime("%T");
				$date = strftime("%B %d, %Y");
		$query=mysqli_query($con,"INSERT INTO account(bank,amount,details,date_transaction,user)
		VALUES('{$_POST["bank"]}','{$_POST["amount"]}','{$_POST["details"]}','$date','$userEmail')")
		or die(mysqli_error());


     else 
                {
                    echo "<script>alert('Deposit not successful'); window.location='dashboard.php'</script>"
                } 

} 

                

                                
?>
