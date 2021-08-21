<?php
    require_once "identification.php";
    $user_name=$row['name'];
    //$sel_up = "select up_login_id from user_profile where up_login_id=$login_id";
    //$sel_result = mysqli_query($conn, $sel_up);
    //$rowcount= mysqli_num_rows($sel_result);
    //if($rowcount>=1)
    //	header('location:leaderboard.php');
    if(isset($_POST['submit'])){
    	$up_fullname = mysqli_real_escape_string($conn, $_POST['up_fullname']);
    	$up_father = mysqli_real_escape_string($conn, $_POST['up_father']);
    	$up_mother = mysqli_real_escape_string($conn, $_POST['up_mother']);
    	$up_email = mysqli_real_escape_string($conn, $_POST['up_email']);
    	$up_age = mysqli_real_escape_string($conn, $_POST['up_age']);
    	$up_gender	= mysqli_real_escape_string($conn, $_POST['up_gender']);
    	$up_height = mysqli_real_escape_string($conn, $_POST['up_height']);
    	$up_hobbies = mysqli_real_escape_string($conn, $_POST['up_hobbies']);
    	$up_dob = mysqli_real_escape_string($conn, $_POST['up_dob']);
    	$up_phone = mysqli_real_escape_string($conn, $_POST['up_phone']);
    	$up_married = mysqli_real_escape_string($conn, $_POST['up_married']);
    	$up_religion = mysqli_real_escape_string($conn, $_POST['up_religion']);
    	$up_about = mysqli_real_escape_string($conn, $_POST['up_about']);
    	
    	$up_address = mysqli_real_escape_string($conn, $_POST['up_address']);
    	$up_city = mysqli_real_escape_string($conn, $_POST['up_city']);
    	$up_state = mysqli_real_escape_string($conn, $_POST['up_state']);
    	$up_postcode = mysqli_real_escape_string($conn, $_POST['up_postcode']);
    	$up_nationality = mysqli_real_escape_string($conn, $_POST['up_nationality']);
    	
    	$up_10_school = mysqli_real_escape_string($conn, $_POST['up_10_school']);
    	$up_10_city = mysqli_real_escape_string($conn, $_POST['up_10_city']);
    	$up_10_state = mysqli_real_escape_string($conn, $_POST['up_10_state']);
    	$up_10_cgpa = mysqli_real_escape_string($conn, $_POST['up_10_cgpa']);
    	$up_10_board = mysqli_real_escape_string($conn, $_POST['up_10_board']);
    	$up_10_yop = mysqli_real_escape_string($conn, $_POST['up_10_yop']);
    	
    	$up_12_school = mysqli_real_escape_string($conn, $_POST['up_12_school']);
    	$up_12_city = mysqli_real_escape_string($conn, $_POST['up_12_city']);
    	$up_12_state = mysqli_real_escape_string($conn, $_POST['up_12_state']);
    	$up_12_cgpa = mysqli_real_escape_string($conn, $_POST['up_12_cgpa']);
    	$up_12_board = mysqli_real_escape_string($conn, $_POST['up_12_board']);
    	$up_12_yop = mysqli_real_escape_string($conn, $_POST['up_12_yop']);
    	
    	$up_ug_college = mysqli_real_escape_string($conn, $_POST['up_ug_college']);
    	$up_ug_city = mysqli_real_escape_string($conn, $_POST['up_ug_city']);
    	$up_ug_state = mysqli_real_escape_string($conn, $_POST['up_ug_state']);
    	$up_ug_cgpa = mysqli_real_escape_string($conn, $_POST['up_ug_cgpa']);
    	$up_ug_university = mysqli_real_escape_string($conn, $_POST['up_ug_university']);
    	$up_ug_yop = mysqli_real_escape_string($conn, $_POST['up_ug_yop']);
    	
    	$up_pg_college = mysqli_real_escape_string($conn, $_POST['up_pg_college']);
    	$up_pg_city = mysqli_real_escape_string($conn, $_POST['up_pg_city']);
    	$up_pg_state = mysqli_real_escape_string($conn, $_POST['up_pg_state']);
    	$up_pg_cgpa = mysqli_real_escape_string($conn, $_POST['up_pg_cgpa']);
    	$up_pg_university = mysqli_real_escape_string($conn, $_POST['up_pg_university']);
    	$up_pg_yop = mysqli_real_escape_string($conn, $_POST['up_pg_yop']);
    	
    	$up_work_designation = mysqli_real_escape_string($conn, $_POST['up_work_designation']);
    	$up_work_company = mysqli_real_escape_string($conn, $_POST['up_work_company']);
    	$up_work_address = mysqli_real_escape_string($conn, $_POST['up_work_address']);
    	$up_work_start = mysqli_real_escape_string($conn, $_POST['up_work_start']);
    	$up_work_end = mysqli_real_escape_string($conn, $_POST['up_work_end']);
    	$up_work_desc = mysqli_real_escape_string($conn, $_POST['up_work_desc']);
    	
    	$up_career = mysqli_real_escape_string($conn, $_POST['up_career']);
    	$up_por = mysqli_real_escape_string($conn, $_POST['up_por']);
    	$up_interest = mysqli_real_escape_string($conn, $_POST['up_interest']);
    	
    	// Setting up the timezone.
    	date_default_timezone_set('Asia/Calcutta');
    	$date=date("d M Y");
    	$time=date("H:i A");
    	$up_date = $time." ".$date;
    		
    
    	if(empty($_FILES['up_image']['tmp_name']) or empty($_FILES['up_work_resume']['tmp_name'])){
    	
    		$up_query = "update user_profile set
    		up_fullname='$up_fullname',up_father='$up_father',up_mother='$up_mother',up_email='$up_email',up_age='$up_age',up_gender='$up_gender',up_height='$up_height',
    		up_dob='$up_dob',up_phone='$up_phone',up_married='$up_married',up_religion='$up_religion',up_about='$up_about',
    		
    		up_address='$up_address',up_city='$up_city',up_state='$up_state',up_postcode='$up_postcode',up_nationality='$up_nationality',
    		up_10_school='$up_10_school',up_10_city='$up_10_city',up_10_state='$up_10_state',up_10_cgpa='$up_10_cgpa',up_10_board='$up_10_board',up_10_yop='$up_10_yop',
    		up_12_school='$up_12_school',up_12_city='$up_12_city',up_12_state='$up_12_state',up_12_cgpa='$up_12_cgpa',up_12_board='$up_12_board',up_12_yop='$up_12_yop',
    		up_ug_college='$up_ug_college',up_ug_city='$up_ug_city',up_ug_state='$up_ug_state',up_ug_cgpa='$up_ug_cgpa',up_ug_university='$up_ug_university',up_ug_yop='$up_ug_yop',
    		up_pg_college='$up_pg_college',up_pg_city='$up_pg_city',up_pg_state='$up_pg_state',up_pg_cgpa='$up_pg_cgpa',up_pg_university='$up_pg_university',up_pg_yop='$up_pg_yop',
    		up_work_designation='$up_work_designation',up_work_company='$up_work_company',up_work_address='$up_work_address',up_work_start='$up_work_start',
    		up_work_end='$up_work_end',up_work_desc='$up_work_desc',
    		
    		up_career='$up_career',up_por='$up_por',up_interest='$up_interest',
    		up_date='$up_date' where up_login_id=$login_id";
    		
    		if(mysqli_query($conn, $up_query)){
    			$query_first_entry = "select entry from login where (email='$email' and password='$password' and role='$role')";
    			$query_first_result = mysqli_query($conn, $query_first_entry);
    			$query_first_row = mysqli_fetch_assoc($query_first_result);
    			$new_entry = $query_first_row['entry']+1;
    			$quer_update = "update login set entry = '$new_entry' where (email='$email' and password='$password' and role='$role')";
    			mysqli_query($conn,$quer_update);
    			header('location:leaderboard.php');
    		}
    	}
    	else{
    		$target_directory = "files/";
    		$target_file = $target_directory.basename($_FILES["up_image"]["name"]);
    		$filetype = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    		$up_image = $target_directory.uniqid('', true).".".$filetype;
    		
    		$target_file = $target_directory.basename($_FILES["up_work_resume"]["name"]);
    		$filetype = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    		$up_work_resume = $target_directory.uniqid('', true).".".$filetype;
    		move_uploaded_file($_FILES["up_image"]["tmp_name"],$up_image);
    		move_uploaded_file($_FILES["up_work_resume"]["tmp_name"],$up_work_resume);
    		
    		$up_query = "update user_profile set
    		up_fullname='$up_fullname',up_father='$up_father',up_mother='$up_mother',up_email='$up_email',up_age='$up_age',up_gender='$up_gender',up_height='$up_height',
    		up_dob='$up_dob',up_phone='$up_phone',up_married='$up_married',up_religion='$up_religion',up_about='$up_about',up_image='$up_image',
    		
    		up_address='$up_address',up_city='$up_city',up_state='$up_state',up_postcode='$up_postcode',up_nationality='$up_nationality',
    		up_10_school='$up_10_school',up_10_city='$up_10_city',up_10_state='$up_10_state',up_10_cgpa='$up_10_cgpa',up_10_board='$up_10_board',up_10_yop='$up_10_yop',
    		up_12_school='$up_12_school',up_12_city='$up_12_city',up_12_state='$up_12_state',up_12_cgpa='$up_12_cgpa',up_12_board='$up_12_board',up_12_yop='$up_12_yop',
    		up_ug_college='$up_ug_college',up_ug_city='$up_ug_city',up_ug_state='$up_ug_state',up_ug_cgpa='$up_ug_cgpa',up_ug_university='$up_ug_university',up_ug_yop='$up_ug_yop',
    		up_pg_college='$up_pg_college',up_pg_city='$up_pg_city',up_pg_state='$up_pg_state',up_pg_cgpa='$up_pg_cgpa',up_pg_university='$up_pg_university',up_pg_yop='$up_pg_yop',
    		up_work_designation='$up_work_designation',up_work_company='$up_work_company',up_work_address='$up_work_address',up_work_start='$up_work_start',
    		up_work_end='$up_work_end',up_work_desc='$up_work_desc',up_work_resume='$up_work_resume',
    		
    		up_career='$up_career',up_por='$up_por',up_interest='$up_interest',
    		up_date='$up_date' where up_login_id=$login_id";
    		
    		if(mysqli_query($conn, $up_query)){
    			$query_first_entry = "select entry from login where (email='$email' and password='$password' and role='$role')";
    			$query_first_result = mysqli_query($conn, $query_first_entry);
    			$query_first_row = mysqli_fetch_assoc($query_first_result);
    			$new_entry = $query_first_row['entry']+1;
    			$quer_update = "update login set entry = '$new_entry' where (email='$email' and password='$password' and role='$role')";
    			mysqli_query($conn,$quer_update);
    			header('location:leaderboard.php');
    		}
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
  <title>Registeration | JoBaskit</title>

  <?php require_once 'requires/top-scripts.php' ?>
  <style>
    .dz-message {
      padding:2rem 1rem;
    }
    

  </style>
  <style>
        @import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            list-style: none;
            font-family: "Montserrat", sans-serif;
        }

        body {
            background: #f3f2f0;
        }

        .wrapper {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .registration_form {
            background: #f78325;
            padding: 56px 96px;
            border-radius: 5px;
            width: 100%;
        }

        .registration_form .title {
            text-align: center;
            font-size: 24px;
            text-transform: uppercase;
            color: #070707;
            letter-spacing: 5px;
            font-weight: 700;
        }

        .form_wrap {
            margin-top: 35px;
        }

        .form_wrap h4 {
            padding-bottom: 15px;
            padding-top: 5px;
        }

        .form_wrap .input_wrap {
            margin-bottom: 15px;
        }

        .form_wrap .input_wrap:last-child {
            margin-bottom: 0;
        }

        .form_wrap .input_wrap label {
            display: block;
            margin-bottom: 3px;
            color: #020202;
        }

        .form_wrap .input_wrap .job {
            padding-bottom: 10px;
        }

        .form_wrap .input_grp1 {
            display: flex;
            justify-content: space-between;
        }

        .input_grp2 {
            display: flex;
            justify-content: space-between;
        }

        .input_grp3 {
            display: flex;
            justify-content: space-between;
        }

        .form_wrap .input_grp1 input[type="text"] {
            width: 220px;
        }

        .form_wrap .input_grp2 input[type="text"] {
            width: 360px;
        }

        .form_wrap .input_grp2 input[type="email"] {
            width: 360px;
        }

        .form_wrap .input_grp2 input[type="radio"] {
            width: 360px;
        }

        .form_wrap .input_grp3 input[type="text"] {
            width: 360px;
        }

        .form_wrap .input_grp3 input[type="date"] {
            width: 360px;
            height: 45px;
        }

        .form_wrap input[type="text"] {
            width: 100%;
            border-radius: 3px;
            border: 1px solid #9597a6;
            padding: 10px;
            outline: none;
        }

        .form_wrap input[type="email"] {
            width: 100%;
            border-radius: 3px;
            border: 1px solid #9597a6;
            padding: 10px;
            outline: none;
        }

        .form_wrap input[type="text"]:focus {
            border-color: #ebd0ce;
        }

        

        .form_wrap .submit_btn {
            width: 25%;
            background: #380f03;
            padding: 10px;
            border: 0;
            border-radius: 3px;
            text-transform: uppercase;
            letter-spacing: 3px;
            cursor: pointer;
            color: aliceblue;
            opacity: 70%;
        }

        .form_wrap .submit_btn:hover {
            background: #0e0300;
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
                    <span class="mb-0 text-sm  font-weight-bold"><?php echo $user_name;?></span>
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
      <div class="container-fluid d-flex align-items-center">
        <div class="row text-center">
          <div class="col-md-12">
            <h1 class="text-white">Student Proforma</h1>
        <!-- <p class="text-white mt-0 mb-5">This is your profile page. You can see the progress you've made with your work and manage your projects or assigned tasks</p>
            <a href="#!" class="btn btn-neutral">Edit profile</a> -->
          </div>
        </div>
      </div>
    </div>

    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-xl-12 order-xl-2">
          <div class="card">
            <div class="">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0"></h3>
                </div>
                <!-- <div class="col-4 text-right">
                  <a href="#!" class="btn btn-sm btn-primary">Settings</a>
                </div> -->
              </div>
            </div>
			
						
            <div class="">
                <!--<h6 class="heading-small text-muted mb-4">Personal information</h6>-->
                <div class="wrapper">
    <div></div>
    
        <div class="registration_form">
            

            <form id="addform" action="" method="post" enctype="multipart/form-data">
                <div class="form_wrap">
                    <h4> <strong> Personal Information</strong></h4>
                    <div class="input_grp3">
                        <div class="input_wrap">
                            <label for="name">Name</label>
                            <input type="text" placeholder="name" id="fname">
                        </div>
                        <div class="input_wrap">
                            <label for="number">Phone Number</label>
                            <input type="text" placeholder="phone_number" id="num">
                        </div>
                        
                    </div>
                    <div class="input_grp2">
                        <div class="input_wrap">
                            <label for="email">Email Address</label>
                            <input type="email" placeholder="email_id" id="email">
                        </div>
                        <div class="input_wrap">
                            <label for="location">Location</label>
                            <input type="text" placeholder="location" id="location">
                        </div>
                    </div>
                    <div class="input_grp3">
                        <div class="input_wrap">
                            <label for="location">Preferred Work locations</label>
                            <input type="text" placeholder="preferred_work_locations" id="plocation">
                        </div>
                        <div class="input_wrap">
                            <label for="objective">Objective</label>
                            <input type="text" placeholder="objective" id="obj">
                        </div>
                    </div>

                    <hr class="my-5">

                    <h4><strong>Experience</strong></h4>

                    <div class="input_wrap">
                        <div class="job">
                            <label for="job">Job Title</label>
                            <input type="text" placeholder="job_title" id="job_title">
                        </div>
                        <div class="input_grp3">
                            <div class="input_wrap">
                                <label for="org">Name Of Organisation</label>
                                <input type="text" placeholder="name_of_organisation" id="org">
                            </div>
                            <div class="input_wrap">
                                <label for="location">Location</label>
                                <input type="text" placeholder="location" id="location">
                            </div>
                        </div>
                        <div class="input_grp3">
                            <div class="input_wrap">
                                <label for="start">Starting From</label>
                                <input type="date" id="start" name="start">
                            </div>
                            <div class="input_wrap">
                                <label for="end">Ending in</label>
                                <input type="date" id="end" name="end">
                            </div>
                        </div>
                        <div class="input_wrap">
                            <label for="roles">Roles and Responsibilities</label>
                            <textarea name="roles" id="roles" placeholder="roles_and_responsibilities" cols="82" rows="3"></textarea>
                        </div>

                    </div>

                    <hr class="my-5">
                    <h4><strong>Education</strong></h4>
                    <div class="input_wrap" id="adding_element">
                        <div class="job">
                            <label for="job">College Name</label>
                            <input type="text" placeholder="college_name" id="college_name">
                        </div>
                        <div class="input_grp3">
                            <div class="input_wrap">
                                <label for="Information">College/University/Autonomous</label>
                                <input type="text" placeholder="college_university_autonomous" id="college_info">
                            </div>
                            <div class="input_wrap">
                                <label for="university">College – Affiliated to</label>
                                <input type="text" placeholder="university" id="university">
                            </div>
                        </div>
                        <label for="Information"> <h5> Degree</h5></label>
                        <div class="input_grp3">
                            <div class="input_wrap">
                                <label for="Information">PG Degree Details</label>
                                <input type="text" placeholder="pg_details" id="college_info">
                            </div>
                            <div class="input_wrap">
                                <label for="university">UG Degree Details</label>
                                <input type="text" placeholder="ug_details" id="university">
                            </div>

                        </div>
                        <div class="input_wrap">
                            <div class="job">
                                <label for="job">Specialisation</label>
                                <input type="text" placeholder="specialisation" id="specialisation">
                            </div>

                        </div>

                        <div class="input_grp3">
                            <div class="input_wrap">
                                <label for="Information">Year of Passing</label>
                                <input type="text" placeholder="year_of_passing" id="year">
                            </div>
                            <div class="input_wrap">
                                <label for="Information">CGPA/Percentage obtained</label>
                                <input type="text" placeholder="" id="cgpa">
                            </div>

                        </div>
                        <div class="input_wrap">

                            <button type="button" class="btn btn-dark" id=" addEdu">+ Add new Education</button>
                        </div>
                    </div>
                    <hr class="my-5">
                    <h4><strong>Honors and Awards</strong></h4>
                    <div class="input_wrap">
                        <div class="job">
                            <label for="award">Title of Award</label>
                            <input type="text" placeholder="title" id="college_name">
                        </div>
                        <div class="input_grp3">
                            <div class="input_wrap">
                                <label for="award">Issued by</label>
                                <input type="text" placeholder="issued_by" id="issued_by">
                            </div>
                            <div class="input_wrap">
                                <label for="university">Issued In – Year</label>
                                <input type="text" placeholder="year" id="Issued_In_Year">
                            </div>

                        </div>
                        <div class="input_wrap">

                            <button type="button" class="btn btn-dark">+ Add new Award</button>
                        </div>
                    </div>
                    <hr class="my-5">
                    <h4><strong>Academic Certification</strong></h4>
                    <div class="input_wrap">
                        <div class="job">
                            <label for="certification">Name of the Certificate</label>
                            <input type="text" placeholder="name_of_the_certificate" id="certificate_name">
                        </div>
                        <div class="input_grp3">
                            <div class="input_wrap">
                                <label for="award">Name of the Issuing Organisation</label>
                                <input type="text" placeholder="issued_by" id="issued_by">
                            </div>
                            <div class="input_wrap">
                                <label for="start">Date of Issue</label>
                                <input type="date" id="start" name="start">
                            </div>
                        </div>
                    </div>

                    <hr class="my-5">
                    <h4><strong>Projects/Research Experience</strong></h4>
                    <div class="input_wrap">
                        <div class="job">
                            <label for="title">Project title</label>
                            <input type="text" placeholder="project_title" id="project_title">
                        </div>
                        <div class="input_wrap">
                            <label for="roles">Project Description</label>
                            <textarea name="roles" id="roles" placeholder="project_description" cols="82" rows="3"></textarea>
                        </div>
                        <div class="input_grp3">
                            <div class="input_wrap">
                                <label for="year">Year</label>
                                <input type="text" placeholder="year" id="year">
                            </div>

                            <div class="input_wrap">
                                <label for="advisor">Advisor (Name of Faculty/Researcher)</label>
                                <input type="text" placeholder="advisor" id="advisor">
                            </div>
                        </div>
                        <div class="input_wrap">
                            <label for="roles">Use Cases</label>
                            <textarea name="roles" id="roles" placeholder="use_cases" cols="82" rows="3"></textarea>
                        </div>
                        <div class="input_grp3">
                            <div class="input_wrap">
                                <label for="Published">Published In</label>
                                <input type="text" placeholder="published_in" id="published_in">
                            </div>

                            <div class="input_wrap">
                                <label for="Place">Place of the Project (Name of Organisation)</label>
                                <input type="text" placeholder="place_of_project" id="place_of_project">
                            </div>
                        </div>
                    </div>
                    <hr class="my-5">
                    <h4><strong>Journal Publications (APA format)</strong></h4>
                    <div class="input_wrap">
                        <div class="input_grp3">
                            <div class="input_wrap">
                                <label for="Journal">Journal Papers Accepted</label>
                                <input type="text" placeholder="journal_papers" id="accepted">
                            </div>

                            <div class="input_wrap">
                                <label for="Journal">Journal Papers in Review</label>
                                <input type="text" placeholder="journal_papers_review" id="review">
                            </div>
                        </div>
                        <div class="input_wrap">
                            <label for="roles">Conference Papers (APA format)</label>
                            <textarea name="roles" id="roles" placeholder="conference_papers" cols="82" rows="2"></textarea>
                        </div>
                    </div>
                    <hr class="my-5">
                    <h4><strong>Patents</strong></h4>
                    <div class="input_wrap">
                        <div class="input_grp3">
                            <div class="input_wrap">
                                <label for="lname">Inventor LastName</label>
                                <input type="text" placeholder="last_name" id="lname">
                            </div>

                            <div class="input_wrap">
                                <label for="fname">Inventor FirstName</label>
                                <input type="text" placeholder="first_name" id="fname">
                            </div>
                        </div>
                        <div class="job">
                            <label for="title">“Title of Invention”</label>
                            <input type="text" placeholder="title" id="project_title">
                        </div>
                        <div class="input_grp3">
                            <div class="input_wrap">
                                <label for="Patent">Patent office</label>
                                <input type="text" placeholder="patent_office" id="office">
                            </div>

                            <div class="input_wrap">
                                <label for="Patent">Patent No.</label>
                                <input type="text" placeholder="patent_no" id="fname">
                            </div>
                        </div>
                    </div>
                    <hr class="my-5">
                    <h4><strong>Professional Training</strong></h4>
                    <h5><strong>Seminar or Workshop</strong></h5>
                    <div class="input_wrap">
                        <div class="input_grp3">
                            <div class="input_wrap">
                                <label for="Institution">Name of Institution</label>
                                <input type="text" placeholder="name_of_institution" id="institution">
                            </div>

                            <div class="input_wrap">
                                <label for="location">Location</label>
                                <input type="text" placeholder="location" id="location">
                            </div>
                        </div>
                        <div class="input_grp3">
                            <div class="input_wrap">
                                <label for="Validity">Validity</label>
                                <input type="text" placeholder="validity" id="validity">
                            </div>
                            <div class="input_wrap">
                                <label for="date">Date</label>
                                <input type="date" id="start" name="date">
                            </div>
                        </div>
                        <div class="input_wrap">
                            <label for="roles">Description</label>
                            <textarea name="roles" id="roles" placeholder="description" cols="82" rows="3"></textarea>
                        </div>

                    </div>
                    <hr class="my-5">
                    <h4><strong>Professional Affiliations</strong></h4>
                   
                    <div class="input_wrap">
                        <div class="input_grp3">
                            <div class="input_wrap">
                                <label for="Institution">Name of Organization</label>
                                <input type="text" placeholder="name_of_organisation" id="institution">
                            </div>

                            <div class="input_wrap">
                                <label for="year">Year to year</label>
                                <input type="text" placeholder="year" id="year">
                            </div>
                        </div>
                        <div class="input_wrap">
                            <label for="roles">Description of role or responsibilities, if applicable.</label>
                            <textarea name="roles" id="roles" placeholder="description" cols="82" rows="3"></textarea>
                        </div>
                        <div class="input_wrap">

                            <button type="button" class="btn btn-dark">+ Add new Affiliations</button>
                        </div>
                    </div>

                    <hr class="my-5">
                    <div class="input_wrap">
                        
                            <label for="position">Position of Responsibility</label>
                            <input type="text" placeholder="position" id="position">

                            <label for="position"><br>Extracurricular Activities</label>
                            <input type="text" placeholder="position" id="position">
                            
                            <div class="input_grp3">
                                <div class="input_wrap">
                                    <label for="lang"><br>Languages</label>
                                    <input type="text" placeholder="languages" id="lang">
                                </div>
    
                                <div class="input_wrap">
                                    <label for="hobbies"><br>Hobbies</label>
                                    <input type="text" placeholder="hobbies" id="hobbies">
                                </div>
                            </div>
                        
                    </div>


                    <div class="input_wrap text-right">
                        <input type="submit" value="SUBMIT" class="submit_btn">
                    </div>

            
        </div></form>
    </div>

                
            </div>
          </div>
        </div>
      </div>
      

    </div>

  </div>

<!-- Optional JS -->
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';
        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>

<?php require_once 'requires/end-scripts.php' ?>
</body>

</html>