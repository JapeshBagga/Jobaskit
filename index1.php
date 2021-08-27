<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Login | JoBaskit</title>
    
    <!-- Bootstrap css -->
    <!-- <link rel="stylesheet" href="resources/bootstrap/bootstrap.min.css" /> -->
    <!-- Custom css -->
    <link rel="stylesheet" href="resources/css/general.css" />
    <link rel="stylesheet" href="resources/css/header-footer.css" />
    <link rel="stylesheet" href="resources/css/style.css" />
    <!-- Custom Fonts -->
    <!-- <link rel="stylesheet" href="resources/icons/flaticon.css" /> -->

    <?php require_once 'requires/top-scripts.php' ?>
  </head>
  <body>

    <!-- Header Navbar -->
    <header>
      <nav class="navbar fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button"class="navbar-toggle collapsed"data-toggle="collapse"data-target="#bs-example-navbar-collapse-1"aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- <a class="navbar-brand" href="index.html">Jobaskit</a> -->
            <a class="navbar-brand" href="index.html"><img src="resources/images/logo.png" title="Jobaskit"/></a>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="https://jobaskit.com/feature_1.php" title="Colleges">Colleges</a></li>
              <li><a href="https://jobaskit.com/feature.php" title="Requiters">Recruiters</a></li>
              <li><a href="users.html" title="Users">Users</a></li>
              <li><a href="features.html" class="pr-0" title="Features">Features</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Banner -->
    <div class="banner">
      <div class="bannerOverlay">
        <div class="container">
          <div class="row">
            <div class="col-7">
              <div class="bannerDesc">
                <img src="/resources/images/bannerImg.png" title="Jobaskti">
              </div>
            </div>
            <div class="col-5">
              <div class="card bg-secondary border-0 mt-6">
                <!-- Sign in with Github and google  -->
                <div class="card-header bg-transparent pb-5">
                  <div class="text-muted text-center mt-2 mb-2"><small>Sign in with</small></div>
                  <div class="btn-wrapper text-center">
                    <a href="#" class="btn btn-neutral btn-icon">
                      <span class="btn-inner--icon"><img src="img/icons/common/google.svg"></span>
                      <span class="btn-inner--text">Google</span>
                    </a>
                    <a href="#" class="btn btn-neutral btn-icon">
                      <span class="btn-inner--icon"><img src="img/icons/common/linkedin.svg"></span>
                      <span class="btn-inner--text">Linkedin</span>
                    </a>
                  </div>
                </div>
                
                <div class="card-body px-lg-5 py-lg-3">
                  <div class="text-center text-muted mb-4">
                    <small>OR</small>
                    <!-- <h2>LOGIN</h2> -->
                  </div>
                  <form action="" method="post" role="form">
                    <div class="form-group mb-4">
                      <div class="input-group input-group-merge input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                        </div>
                        <input name="email" class="form-control" placeholder="Email" type="email" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group input-group-merge input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                        </div>
                        <input name="password" class="form-control" placeholder="Password" type="password" required>
                      </div>
                    </div>
                    <div class="custom-control custom-control-alternative custom-checkbox">
                      <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                      <label class="custom-control-label" for=" customCheckLogin">
                        <span class="text-muted">Remember me</span>
                      </label>
                    </div>
                    <div class="text-center">
                      <button type="submit" name="submit" class="btn btn-warning my-4">Sign in</button>
                    </div>
                  </form>
                  <div class="row">
                    <div class="col-6">
                      <a href="#" class="text-dark"><small>Forgot password?</small></a>
                    </div>
                    <div class="col-6 text-right">
                      <a href="sign-up.php" class="text-dark"><small>Create new account</small></a>
                    </div>
                  </div>
                </div>
                <!-- <p class="formBtmDesc text-center">Connect With best Campuses and Recruiters in one place.</p> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Footer -->
    <footer>
      <div class="container-fluid">
        <div class="row">
          <div class="col-4">
            <h4 class="mt-0">Follow US</h4>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda, fuga consequatur! Asperiores facilis ullam perspiciatis.</p>
            <ul class="nav navbar-nav">
              <li><a href="#" title="Facebook" class="facebook"><img src="resources/images/facebook.png" alt="Facebook"></a></li>
              <li><a href="#" title="Google" class="google"><img src="resources/images/google-plus.png" alt="Google"></a></li>
              <li><a href="#" title="Linkedin" class="linkedIn"><img src="resources/images/linkedin.png" alt="Linkedin"></a></li>
              <li><a href="#" title="Twitter" class="twitter"><img src="resources/images/twitter.png" alt="Twitter"></a></li>
            </ul>
          </div>
          <div class="col-2">
            <h4>About</h4>
            <ul class="quickLinks">
              <li><a href="#" title="">Blog</a></li>
            </ul>
          </div>
          <div class="col-3">
            <h4>Solutions</h4>
            <ul class="quickLinks">
              <li><a href="https://jobaskit.com/feature_1.php" title="Colleges">Colleges</a></li>
              <li><a href="https://jobaskit.com/feature.php" title="Recruiters">Requiters</a></li>
            </ul>
          </div>
          <div class="col-3">
            <h4>For advertisements contact</h4>
            <div class="footerIT">
              <div class="footerITImg">
                <img src="resources/images/call.png">
              </div>
              <div class="footerITText">
                <p>84354 34233</p>
              </div>
            </div>
            <div class="footerIT">
              <div class="footerITImg">
                <img src="resources/images/email.png">
              </div>
              <div class="footerITText">
                <p>jobaskit@gmail.com</p>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="copyRights text-center">
              <p class="mb-0">
                Copyright © 2021 Jobaskit | All rights reserved.
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    
    <!-- Footer -->
  <!-- <footer class="py-5" id="footer-main">
    <div class="container">
      <div class="row align-items-center justify-content-xl-between">
        <div class="col-xl-6">
          <div class="copyright text-center text-xl-left text-muted">
            &copy; 2021 <a href="https://jobaskit.com/" class="font-weight-bold ml-1" target="_blank">JoBaskit</a>
          </div>
        </div>
        <div class="col-xl-6">
          <ul class="nav nav-footer justify-content-center justify-content-xl-end">
            <li class="nav-item">
              <a href="https://jobaskit.com/" class="nav-link" target="_blank">Makos Info Tech Pvt Ltd</a>
            </li>
            <li class="nav-item">
              <a href="https://jobaskit.com/" class="nav-link" target="_blank">About Us</a>
            </li>
            <!-- <li class="nav-item">
              <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
            </li> -->
            <!-- <li class="nav-item">
              <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
            </li> 
          </ul>
        </div>
      </div>
    </div>
  </footer> -->

    <!-- Bootstrap scripts-->
    <!-- <script src="resources/bootstrap/jquery-1.12.4.min.js"></script>
    <script src="resources/bootstrap/bootstrap.min.js"></script> -->
    <!-- Custom scripts-->
    <script src="resources/js/site.js"></script>

  <?php require_once 'requires/end-scripts.php' ?>

</body>

</html>