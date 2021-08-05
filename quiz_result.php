<?php
require_once "identification.php";
$score =$_POST['score_data'];
$quiz_id =$_POST['quiz_id'];
$login_id =$_POST['login_id'];
$query = "insert into score (score_data,score_quiz_id,score_login_id) values ('$score','$quiz_id','$login_id')";
mysqli_query($conn, $query);
echo "1";

?>