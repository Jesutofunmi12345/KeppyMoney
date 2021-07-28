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
                    <h2 class="section-heading">Available Packages</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
       
        
        
        <div class="container" align="center">
            <div class="row">
                <div class="col-lg-3  col-md-3 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-heart text-primary sr-icons" data-sr-id="2" style="; visibility: visible;  -webkit-transform: scale(1); opacity: 1;transform: scale(1); opacity: 1;-webkit-transition: -webkit-transform 0.6s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.6s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; transition: transform 0.6s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.6s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; "></i>
                        <h3>STARTER</h3>
                        <p class="text-muted">You make a subscription of:</p>
            <p class="text-muted">₦20,000</p>
            <p class="text-muted">Recieve:</p>
            <p class="text-muted">₦40,000</p>
            <form method="POST" action="process2.php">
            <input name="email" value="<?php echo $email; ?>" type="hidden">
            <input name="status" value="starter" type="hidden">
                        <button name="btn-10k" class="btn btn-success btn-xl page-scroll">Apply</button>            
              </form>
            
                    </div>
                </div>
        
        
                <div class="col-lg-3 col-md-3 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-paper-plane text-primary sr-icons" data-sr-id="3" style="; visibility: visible;  -webkit-transform: scale(1); opacity: 1;transform: scale(1); opacity: 1;-webkit-transition: -webkit-transform 0.6s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.6s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; transition: transform 0.6s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.6s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; "></i>
                        <h3>BRONZE</h3>
                        <p class="text-muted">You make a subscription of:</p>
             <p class="text-muted">₦50,000</p>
             <p class="text-muted">Recieve:</p>
            <p class="text-muted">₦100,000</p>
            <form method="POST" action="process2.php">
            <!--<input name="memberid" value="<?php echo $email; ?>" type="hidden">-->
            <input name="email" value="<?php echo $email; ?>" type="hidden">
            <input name="status" value="bronze" type="hidden">
            <button name="btn-20k" class="btn btn-success btn-xl page-scroll">Apply</button>            
            </form>
                    </div>
                </div>
        
        
        
               <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-lightbulb-o text-primary sr-icons"></i>
                        <h3>GOLD</h3>
                        <p class="text-muted">You make a subscription of:</p>
             <p class="text-muted">₦100,000</p>
             <p class="text-muted">Recieve:</p>
            <p class="text-muted">₦200,000</p>
            <form method="POST" action="process2.php">
            <input name="email" value="<?php echo $email; ?>" type="hidden">
            <input name="status" value="gold" type="hidden">
            <button name="btn-20k" class="btn btn-success btn-xl page-scroll">Apply</button>            
            </form>
                    </div>
                </div>
        
        
        
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-sun-o text-primary sr-icons"></i>
                        <h3>DIAMOND</h3>
                        <p class="text-muted">You make a subscription of:</p>
             <p class="text-muted">₦200,000</p>
             <p class="text-muted">Recieve:</p>
            <p class="text-muted">₦400,000</p>
            <form method="POST" action="process2.php">
            <input name="email" value="<?php echo $email; ?>" type="hidden">
            <input name="status" value="diamond" type="hidden">
            <button name="btn-20k" class="btn btn-success btn-xl page-scroll">Apply</button>            
            </form>
                    </div>
                </div>
        
        

            </div>
        </div>
    </section>

</div>
        
          </section>
      </section>

 <?php include("includes/footer.php"); ?>
  </section>
  <?php } ?>
