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
                    <h2 class="section-heading">Activity Tasks</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
       
        
        
        <div class="container" align="center">
            <div class="row">

            <h1>NOT AVAILABLE AT THE MOMENT</h1>
            <hr></hr>

            <h1>NOT AVAILABLE AT THE MOMENT</h1>
            <hr></hr>


            <h1>NOT AVAILABLE AT THE MOMENT</h1>
            <hr></hr>


            <h1>NOT AVAILABLE AT THE MOMENT</h1>
            <hr></hr>








            </div>
        </div>
    </section>

</div>
        
          </section>
      </section>

 <?php include("includes/footer.php"); ?>
  </section>
  <?php } ?>