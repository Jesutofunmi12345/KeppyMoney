<?php session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}
else{ ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>KEPPYMONEY| Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">    

    
    
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <!-- Theme CSS -->
    <!--<link href="assets/css/creative.min.css" rel="stylesheet">-->

    <script src="assets/js/chart-master/Chart.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <style type="text/css">
  .sub-container{
    width: 700px;
    height: 200px;
    padding: 10px;
    float:left;
    display: inline-block;
    font-family: 'Ruda', sans-serif;
    font-size: 16px;
    background: #424a5d;
    color: white;
    font-weight: 400;
    margin-left: 200px;
}
</style>

  <body>

  <section id="container" >
  <?php include("includes/header2.php");?>
  <?php include("includes/sidebar.php");?>
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
              <?php include 'user-navbar.php'; ?>
          </div>
				    <section class="sub-container">
              <div class="row">
              <div class="col-lg-6 col-md-6">
              <p>Date Registered</p>
              <?php
               $email=$_SESSION['login'];
               $result = mysqli_query($con,"SELECT * FROM users where userEmail='$email' ");
               while($row=mysqli_fetch_array($result)) 
                  {
               ?>
              <p style="text-transform:uppercase;"><?php echo htmlentities($row['regDate']);?></p>
              <?php } ?>
              </div>

              <div class="col-lg-6 col-md-6">
              <p>Next Withdrawal</p>
              <?php
               $email=$_SESSION['login'];
               $result = mysqli_query($con,"SELECT * FROM users where userEmail='$email'");
               while($row=mysqli_fetch_array($result)) 
                  {
                 ?>
              <p style="text-transform:uppercase;"><?php echo htmlentities($row['regDate']); ?></p>
               <?php } ?>
              </div>

              </div>
              </section>
          </section>
      </section>


<h2 style="margin-left:250px; font-size:18px; color:black;"><strong>Here's your referral link:</strong></h2>
<?php
//$userEmail=$_SESSION['login'];
$extract = mysqli_query($con,"SELECT * FROM users WHERE userEmail = '$email'") or die(mysqli_error());
while($row = mysqli_fetch_assoc($extract))
{
  $id = $row['id'];
  $name=$row['fullName'];
}
?>

<p style="margin-left:250px; font-size:16px;"><a href="<?php echo URL.'?refer='.$id; ?>"><?php echo URL.'?refer='.$name,$id; ?></a></p>

<?php include("includes/footer.php");?>
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="assets/js/sparkline-chart.js"></script>    
	<script src="assets/js/zabuto_calendar.js"></script>	
  </body>
</html>
<?php } ?>
