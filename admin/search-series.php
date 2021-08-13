
<?php
require_once "connection.php";
	$sr_query = "select sr_name from series 
	where (sr_name LIKE '".$_POST['query']."%')";
	$sr_query_result = mysqli_query($conn,$sr_query);
	if(mysqli_num_rows($sr_query_result)>0){
		while($row=mysqli_fetch_array($sr_query_result)){
?>
		        <a href="#" id="sr" class="list-group-item list-group-item-action border-1"><?php echo $row['sr_name'];?></a>

<?php
		}
	}
?>