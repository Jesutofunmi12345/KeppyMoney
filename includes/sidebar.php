<aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
<?php $query=mysqli_query($con,"select fullName,userImage from users where userEmail='".$_SESSION['login']."'");
 while($row=mysqli_fetch_array($query)) 
 {
 ?> 
<p class="centered"><a href="profile.php">
<?php $userphoto=$row['userImage'];
if($userphoto==""):
?>
<img src="userimages/profile-image.png" class="img-circle" width="70" height="70" >
<?php else:?>
  <img src="userimages/<?php echo htmlentities($userphoto);?>" class="img-circle" width="70" height="70">

<?php endif;?>
</a>
</p>
 
                  <h5 class="centered"><?php echo htmlentities($row['fullName']);?></h5>
                  <?php } ?>
                    
                  <li class="mt">
                      <a href="dashboard.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>


                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Account Setting</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="#">Profile</a></li>
                          <li><a  href="#">Change Password</a></li>
                        
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="deposit.php" >
                          <i class="fa fa-book"></i>
                          <span>Deposit</span>
                      </a>
                    </li>
                    <li class="sub-menu">
                      <a href="mypackages.php" >
                          <i class="fa fa-book"></i>
                          <span>My Packages</span>
                      </a>
                    </li>
                  </li>
                  <li class="sub-menu">
                      <a href="withdraw.php" >
                          <i class="fa fa-tasks"></i>
                          <span>Withdraw</span>
                      </a>
                      
                  </li>
                  <li class="sub-menu">
                      <a href="activity.php" >
                          <i class="fa fa-tasks"></i>
                          <span>Activity Tasks</span>
                      </a>
                      
                  </li>

                   <li class="sub-menu">
                      <a href="refer.php" >
                          <i class="fa fa-tasks"></i>
                          <span>Referrals</span>
                      </a>
                      
                  </li>
                 
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>