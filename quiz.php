<?php
  require_once "identification.php";
   if(isset($_REQUEST["eid"]))
     $quiz_id=$_REQUEST["eid"];
	else
     header('location:../index.php');

  $quiz_id=1;
  $query_quiz_time="select quiz_title,quiz_time from quiz_topic where quiz_id=$quiz_id";
  $quiz_time_result = mysqli_query($conn, $query_quiz_time);
  $quiz_time_row = mysqli_fetch_assoc($quiz_time_result);
  $quiz_time = $quiz_time_row['quiz_time'];
  $quiz_name = $quiz_time_row['quiz_title'];
  /*
  if(isset($_POST["submit"])){
    $quiz_id=$_POST['quiz_id'];
    $query_quiz="select qust_id,question,opt1,opt2,opt3,opt4,correct1,correct2 from quiz_qust where quiz_id=$quiz_id";
    $quiz_result = mysqli_query($conn, $query_quiz);
    $count=0;
    while($quiz_row = mysqli_fetch_assoc($quiz_result)){
      if(!empty($_POST[$quiz_row['qust_id']])){
        if($quiz_row['correct1']==$_POST[$quiz_row['qust_id']]){
          $count=$count+10;
        }else if($quiz_row['correct2']==$_POST[$quiz_row['qust_id']]){
          $count=$count+7;
        }
        else
          continue;
      }else{
        header('location:aptitude-quizes.php');
      }
    }
    $query_score = "insert into score (score_data,score_quiz_id,score_login_id) values ('$count','$quiz_id','$login_id')";
    $score_result = mysqli_query($conn, $query_score);
    header('location:aptitude-quizes.php');
  }
  */
?>

<?php
require_once "identification.php";
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title> Quiz | JoBaskit</title>
  <style>
      table, tr, td{
        border: solid;
        font-size:14px;
        padding:4px;
      }
      
  </style>

  <?php require_once 'requires/top-scripts.php' ?>

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
             <li class="nav-item active">
              <a class="nav-link" href="aptitude-quizes.php">
                <i class="ni ni-bullet-list-67"></i>
                <span class="nav-link-text">Aptitude Quiz</span>
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
                        <i class="ni ni-single-02"></i>
                        <!-- <img alt="Image placeholder" src="img/theme/team-1.jpg" class="avatar rounded-circle"> -->
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
                <a href="#!" class="dropdown-item">
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
    <div class="header pb-2 d-flex align-items-center" style="background-image: url(img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
       <div class="container-fluid">
           <div class="row py-4">
              <div class="col-lg-8">
			  
			  <h2 class="h2 text-white"><?php echo $quiz_name;?></h2>
			  <p class="h4 text-white" name="timer" id="demo"></p>
			  </div>
              <div class="col-lg-2">
              </div>
              <div class="col-lg-2"></div>
           </div>
       </div>
    </div>
    <br><br><br><br>

    <!-- Quiz content -->
    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col-lg-9 order-xl-1">
                <div class="card" id="quiz">
                    <div class="card-header">
                        <h4  id="question">Question</h4>
                    </div>
                    <div class="card-body">
                        <!-- <h6 class="heading-small text-muted mb-4">Introduce Yourself</h6> -->
                        <div class="pl-lg-10">
                            <!-- Description -->
                            <div class="pl-lg-4">
                                <div class="row" id="output">
                                    <div class="col-lg-6 col-6">
										<input type="radio" id="a" name="answer" class="answer">
										<label id="a_text" for="a">dd</label>
                                    </div>
                                    <div class="col-lg-6 col-6">
										<input type="radio" id="b" name="answer" class="answer">
										<label id="b_text" for="b">dd</label>
                                    </div>
                                    <div class="col-lg-6 col-6">
										<input type="radio" id="c" name="answer" class="answer">
										<label id="c_text" for="c">dd</label>
                                    </div>
                                    <div class="col-lg-6 col-6">
										<input type="radio" id="b" name="answer" class="answer">
										<label id="d_text" for="d">dd</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
					    <button type="submit" id="submit" name="submit" class="btn btn-custon-rounded-three btn-primary">Save and Next</button>
                    </div> 
				</div> 
            </div>
			
	<?php 
	require_once 'connection.php';
	$query = "select question, opt1, opt2, opt3, opt4, correct1,correct2 from quiz_qust where quiz_id=$quiz_id";
	$result = mysqli_query($conn, $query);
	?>
    <script >
        const quizData = [
		
		<?php
		
		while($row = mysqli_fetch_assoc($result)){
		
		?>
		
            {
                question:
                "<?php echo $row['question'];?>",
                a: "<?php echo $row['opt1'];?>",
                b: "<?php echo $row['opt2'];?>",
                c: "<?php echo $row['opt3'];?>",
                d: "<?php echo $row['opt4'];?>",
                correct: "<?php echo $row['correct1'];?>",
				correct2: "<?php echo $row['correct2'];?>"
            },
			
		<?php
		}
		?>
       
        ];

            const questionEl = document.getElementById("question");
            const answersEls = document.querySelectorAll(".answer");
            const quiz = document.getElementById("quiz");

            const a_text = document.getElementById("a_text");
            const b_text = document.getElementById("b_text");
            const c_text = document.getElementById("c_text");
            const d_text = document.getElementById("d_text");
            const submitBtn = document.getElementById("submit");

            let currentQuiz = 0;
            let score = 0;

            loadQuiz();

            function loadQuiz() {
                deselectAnswers();

                const currentQuizData = quizData[currentQuiz];

                questionEl.innerText = currentQuizData.question;

                a_text.innerText = currentQuizData.a;
                b_text.innerText = currentQuizData.b;
                c_text.innerText = currentQuizData.c;
                d_text.innerText = currentQuizData.d;
            }

            function getSelected() {
            let answer = undefined;

            answersEls.forEach((answersEl) => {
                if (answersEl.checked) {
                answer = answersEl.id;
                }
            });

            return answer;
            }

            function deselectAnswers() {
            answersEls.forEach((answersEl) => {
                if (answersEl.checked) {
                answersEl.checked = false;
                }
            });
            }

            submitBtn.addEventListener("click", () => {
            // Check to see the answer
            const answer = getSelected();

            if (answer) {
                if (answer === quizData[currentQuiz].correct) {
                score++;
                }
				else if (answer === quizData[currentQuiz].correct2) {
                score++;
                }

                currentQuiz++;
                if (currentQuiz < quizData.length) {
                loadQuiz();
                } else if (score === quizData.length) {
					
					$.ajax({
					  url: "quiz_result.php",
					  method: "post",
					  data: {
						score_data: score,
						quiz_id:"<?php echo '1'; ?>",
						login_id:"<?php echo '1'; ?>",
					  },
					  success: function (response) {
						quiz.innerHTML = "Successfully submitted your answers.";
                
					  },
					});
					
					} else {
                
				
				$.ajax({
					  url: "quiz_result.php",
					  method: "post",
					  data: {
						score_data: score,
						quiz_id:"<?php echo '1'; ?>",
						login_id:"<?php echo '1'; ?>",
					  },
					  success: function (response) {
						quiz.innerHTML = "Successfully submitted your answers.";
					  },
					});
				
				}
            }
            });

  
    </script>
			
			
			
			<!--
            <div class="col-lg-3 order-xl-1">
                <table style="border: solid">
                    <tr>
                        <td style="background-color:black; color:white; border: 1px black solid">Q1</td>
                        <td>Q2</td>
                        <td>Q3</td>
                        <td>Q4</td>
                        <td>Q5</td>
                        <td>Q6</td>

                    </tr>
                    <tr>
                        <td>Q1</td>
                        <td>Q2</td>
                        <td>Q3</td>
                        <td>Q4</td>
                        <td>Q5</td>
                        <td>Q6</td>

                    </tr>
                    <tr>
                        <td>Q1</td>
                        <td>Q2</td>
                        <td>Q3</td>
                        <td>Q4</td>
                        <td>Q5</td>
                        <td>Q6</td>

                    </tr>
                    <tr>
                        <td>Q1</td>
                        <td>Q2</td>
                        <td>Q3</td>
                        <td>Q4</td>
                        <td>Q5</td>
                        <td>Q6</td>

                    </tr>
                    <tr>
                        <td>Q1</td>
                        <td>Q2</td>
                        <td>Q3</td>
                        <td>Q4</td>
                        <td>Q5</td>
                        <td>Q6</td>

                    </tr>
                    <tr>
                        <td>Q1</td>
                        <td>Q2</td>
                        <td>Q3</td>
                        <td>Q4</td>
                        <td>Q5</td>
                        <td>Q6</td>

                    </tr>

                </table>
                <br/><br/>
                <div class="custom-control custom-checkbox mb-3">
                    <input class="custom-control-input" name="flag_qust" type="checkbox">
                    <label class="custom-control-label" for="customCheck1">Flag Question</label>
                </div>
                <div class="custom-control custom-checkbox mb-3">
                    <input class="custom-control-input" name="flag_completed" type="checkbox" >
                    <label class="custom-control-label" for="customCheck2">Mark as completed</label>
                </div>
                <div class="custom-control custom-checkbox mb-3">
                    <input class="custom-control-input" name="flag_wrong" type="checkbox" checked>
                    <label class="custom-control-label" for="customCheck2">Mark as wrong question</label>
                </div>
            </div>
			-->
        </div>       
    </div>
 </div>



	<script>
	
			/*var countDownDate = new Date();
			countDownDate.setMinutes(countDownDate.getMinutes()+<?php echo $quiz_time;?>);
			var x = setInterval(function() {
			  var now = new Date().getTime();
			  var distance = countDownDate - now;
			  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
			  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
			  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
			  if(hours=="0"){
				document.getElementById("demo").innerHTML = minutes + " M : " + seconds + " S ";
			    
			  }
			  else{
				  document.getElementById("demo").innerHTML =  hours + " H : "+ minutes + " M : " + seconds + " S ";
			  }if (distance < 0) {
				clearInterval(x);
				document.getElementById("demo").innerHTML ="Time Up!";
				window.location.href="leaderboard.php";
			  }
			}, 1000);
			
			
			
		/*
        var totalSeconds = 0;
        setInterval(setTime, 1000);

        function setTime()
        {
            ++totalSeconds;
            var sec=pad(totalSeconds%60);
            var min=pad(parseInt(totalSeconds/60));
			document.getElementById("demo2").value = min + " M : " + sec + " S ";
        }

        function pad(val)
        {
            var valString = val + "";
            if(valString.length < 2)
            {
                return "0" + valString;
            }
            else
            {
                return valString;
            }
        }
		
		function nt(){
		document.getElementById("notify").innerHTML="Loading...Please Wait...";
		var x = document.getElementById("notify");
		x.style.background="darkorange";
		x.style.padding="10px";
		x.style.color="black";
		return true;
		}
		*/
		</script>
  <?php require_once 'requires/end-scripts.php' ?>
</body>

</html>