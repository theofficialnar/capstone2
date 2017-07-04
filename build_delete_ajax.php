<?php
	session_start();
	require_once 'lib/connection.php';
	$acct_id = $_SESSION['id'];
	$bid = substr($_GET['bid'],3);
	// echo $bid;
	$sql = "DELETE FROM builds WHERE id ='$bid'";
	mysqli_query($conn,$sql);

	// $sql = "SELECT * FROM builds WHERE acct_id = '$acct_id'";
	// $result = mysqli_query($conn, $sql);
	// while($row = mysqli_fetch_assoc($result)){
	// 	extract($row);
	// 		echo '<div class="card blue-grey">
	// 			<div class="card-content white-text">
	// 				<span class="card-title">'.$build_name.'</span>
	// 				<span id="build_id" style="display: none">'.$id.'</span>
	// 				<p class="build-date">'.$build_date.'</p>
	// 				<p>'.$build_description.'</p>
	// 			</div>
	// 			<div class="card-action center-align">';
	// 				echo "<a href='build.php?build_id=$id' class='waves-effect btn'>View</a>
	// 					<a href='build_update.php?build_id=$id' class='waves-effect btn'>Update</a>
	// 					<a href='#modal3' class='waves-effect btn'>Delete</a>";
	// 			echo '</div>
	// 		</div>';
	// };

	?>