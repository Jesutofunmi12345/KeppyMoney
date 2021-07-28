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

  <body>

  <section id="container" >
<?php include("includes/header2.php");?>
<?php include("includes/sidebar.php");?>
      
      <section id="main-content">
          <section class="wrapper">
          <div class="row">

             <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Make A Deposit</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        </section>

 <form action="make-deposit.php" class="form-login" method="post">
            <!--<h2 class="form-login-heading">User Registration</h2>-->
            <p style="padding-left: 1%; color: green">
              <?php if($msg){
      echo htmlentities($msg);
                }?>


            </p>
            <div class="login-wrap">

            <select class="form-control" id="bank" name="bank" required="required" autofocus>
                <option selected>----Select Your Bank----</option>
                <option value="access">Access Bank</option>
                          <option value="citibank">Citibank DEMO</option>
                          <option value="diamond">Diamond Bank DEMO</option>
                          <option value="ecobank">Ecobank DEMO</option>
                          <option value="fidelity">Fidelity Bank DEMO</option>
                          <option value="firstbank">First Bank DEMO</option>
                          <option value="fcmb">First City Monument Bank (FCMB) DEMO</option>
                          <option value="gtb">Guaranty Trust Bank (GTB) DEMO</option>
                          <option value="heritage">Heritage Bank DEMO</option>
                          <option value="keystone">Keystone Bank DEMO</option>
                          <option value="polaris">Polaris Bank DEMO</option>
                          <option value="providus">Providus Bank DEMO</option>
                          <option value="stanbic">Stanbic IBTC Bank DEMO</option>
                          <option value="standard">Standard Chartered Bank DEMO</option>
                          <option value="sterling">Sterling Bank DEMO</option>
                          <option value="suntrust">Suntrust Bank DEMO</option>
                          <option value="union">Union Bank DEMO</option>
                          <option value="uba">United Bank for Africa (UBA) DEMO</option>
                          <option value="unity">Unity Bank DEMO</option>
                          <option value="wema">Wema Bank DEMO</option>
                          <option value="zenith">Zenith Bank DEMO</option>
                </select>
            <br>
             <input type="number" class="form-control" placeholder="Enter Amount" name="amount" required="required" autofocus>
                <br>
                <textarea name="details" class="form-control" placeholder="Description" required="required" autofocus></textarea>
                <br>
                
                <button class="btn btn-theme btn-block"  type="submit" name="submit" id="submit"><i class="fa fa-user"></i>Make A Deposit</button>
                <hr>
    
            </div>
    
          
    
          </form>     






        </div>
        
          </section>
      </section>

 <?php include("includes/footer.php"); ?>
  </section>
  <?php } ?>