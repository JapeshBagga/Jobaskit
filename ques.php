<?php
	require_once 'identification.php';
	if(isset($_POST['submit'])){
		$career_path = $_POST['career_path'];
		$interest = $_POST['interest'];
		$quick_check = $_POST['quick_check'];
		
		$log_insert = "update login set interest='$interest' where login_id=$login_id";
		if(mysqli_query($conn, $log_insert)){
			echo "<script>alert('Successful');</script>";
		}
		else{
			echo "<script>alert('Try Again');</script>";
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Student Survey | JoBaskit</title>

  <?php 
  require_once 'requires/top-scripts.php'; 
  ?>
  <style>
    .dz-message {
      padding:2rem 1rem;
    }

  </style>
  
</head>
<body>
   <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      
      <!----LOGO CODE or BRAND-->
      <?php require_once 'requires/logo.php' ?>

      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="leaderboard.php">
                <i class="ni ni-tv-2"></i>
                <span class="nav-link-text">Leaderboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="introduction.php">
                <i class="ni ni-single-02"></i>
                <span class="nav-link-text">Self-Introduction</span>
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="aptitude-quizes.php">
                <i class="ni ni-bullet-list-67"></i>
                <span class="nav-link-text">Quizes</span>
              </a>
        </div>
      </div>
    </div>
  </nav>

  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-default border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-bell-55"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden">
                <!-- Dropdown header -->
                <div class="px-3 py-3">
                  <h6 class="text-sm text-muted m-0">You have <strong class="text-primary">13</strong> notifications.</h6>
                </div>
                <!-- List group -->
                <div class="list-group list-group-flush">
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="img/theme/team-1.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">Japesh</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>2 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="img/theme/team-2.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>3 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="img/theme/team-3.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>5 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Your posts have been liked a lot.</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="img/theme/team-4.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>2 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="img/theme/team-5.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>3 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                      </div>
                    </div>
                  </a>
                </div>
                <!-- View all -->
                <a href="#!" class="dropdown-item text-center text-primary font-weight-bold py-3">View all</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-ungroup"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-dark bg-default  dropdown-menu-right ">
                <div class="row shortcuts px-4">
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-red">
                      <i class="ni ni-calendar-grid-58"></i>
                    </span>
                    <small>Calendar</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-orange">
                      <i class="ni ni-email-83"></i>
                    </span>
                    <small>Email</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-info">
                      <i class="ni ni-credit-card"></i>
                    </span>
                    <small>Payments</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-green">
                      <i class="ni ni-books"></i>
                    </span>
                    <small>Reports</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-purple">
                      <i class="ni ni-pin-3"></i>
                    </span>
                    <small>Maps</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-yellow">
                      <i class="ni ni-basket"></i>
                    </span>
                    <small>Shop</small>
                  </a>
                </div>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                    <i class="ni ni-single-02"></i>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">User@Japesh</span>
                  </div>
              </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>My profile</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-settings-gear-65"></i>
                  <span>Settings</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-calendar-grid-58"></i>
                  <span>Activity</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-support-16"></i>
                  <span>Support</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="logout.php" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
    <!-- Header -->
    <div class="header pb-6 d-flex align-items-center" style="min-height: 150px; background-image: url(img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <!-- <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-7 col-md-10">
            <h1 class="display-2 text-white">Hello Jesse</h1>
            <p class="text-white mt-0 mb-5">This is your profile page. You can see the progress you've made with your work and manage your projects or assigned tasks</p>
            <a href="#!" class="btn btn-neutral">Edit profile</a>
          </div>
        </div>
      </div> -->
    </div>

    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-xl-12 order-xl-2">
          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Student Performa 2 </h3>
                </div>
              </div>
            </div>
            
            <div class="card-body">
              <form action="" method="post">
                <h6 class="heading-small mb-4">1. Did You plan your career path?</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <div class="custom-control custom-radio mb-3">
                                <input class="custom-control-input" id="option0" name="career_path" type="radio" value="yes">
                                <label class="custom-control-label" for="option0">Yes</label>
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <div class="custom-control custom-radio mb-3">
                                <input class="custom-control-input" id="option1" name="career_path" type="radio" value="no">
                                <label class="custom-control-label" for="option1">No</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <div class="custom-control custom-radio mb-3">
                                <input class="custom-control-input" id="option2" name="career_path" type="radio" value="not_sure">
                                <label class="custom-control-label" for="option2">Not sure</label>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4" />

                <h6 class="heading-small mb-4">2. Which competitive exam/field do you want to target?</h6>
                <div class="pl-lg-4">
                  <div class="row">
				  <?php
					$sel_dm = "select dm_name from domain";
					$result_dm = mysqli_query($conn, $sel_dm);
					
					$sel_log = "select interest from login where login_id=$login_id";
					$result_log = mysqli_query($conn, $sel_log);
					$row_log = mysqli_fetch_assoc($result_log);
					
					$i=21;
					while($row_dm = mysqli_fetch_assoc($result_dm)){
						
				  ?>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <div class="custom-control custom-radio mb-3">
                                <input class="custom-control-input" id="option<?php echo $i;?>" name="interest" type="radio" value="<?php echo $row_dm['dm_name'];?>"
								<?php
								if($row_log['interest']==$row_dm['dm_name'])
									echo "checked";
								?>
								>
                                <label class="custom-control-label" for="option<?php echo $i;?>"><?php echo $row_dm['dm_name'];?></label>
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
				<?php
						$i++;
					}
				?>
				</div>
                <hr class="my-4" />

                <h6 class="heading-small mb-4">3. Would you like to quickly check your skills through a quick quiz?</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <div class="custom-control custom-radio mb-3">
                                <input class="custom-control-input" id="option222" name="quick_check" type="radio" value="yes">
                                <label class="custom-control-label" for="option222">Yes</label>
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <div class="custom-control custom-radio mb-3">
                                <input class="custom-control-input" id="option225" name="quick_check" type="radio" value="no">
                                <label class="custom-control-label" for="option225">No</label>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4" />

                <div class="row">
                  <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12"></div>
                  <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12">
                    <button type="submit" name="submit" class="btn btn-custon-rounded-three btn-warning">Submit</button>
                  </div>
                  <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12"></div>

                  <br><br>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      

    </div>

  </div>


<?php require_once 'requires/end-scripts.php' ?>
</body>

</html>