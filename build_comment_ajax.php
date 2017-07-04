<?php
	require_once 'lib/connection.php';
	$bid = $_GET['bid'];
	$comment = $_POST['comment'];
	$commenter_id = $_POST['user_id'];
	$sql = "INSERT INTO build_comments (comment, build_id, commenter_id, comment_date)
			VALUES ('$comment', '$bid', '$commenter_id', CURDATE())";
	mysqli_query($conn, $sql);

	$sql = "SELECT * FROM build_comments bc JOIN builds b ON bc.build_id = b.id JOIN users u ON bc.commenter_id = u.id  
			ORDER BY bc.id  DESC LIMIT 1";
	$result = mysqli_query($conn, $sql);
	while($row = mysqli_fetch_assoc($result)){
		extract($row);
		echo '<p>Posted by: '.$username.'</p>
			<p>Date: '.$comment_date.'</p>
			<p>Comment: '.$comment.'<p>';
	};
	// $sql = "SELECT * FROM build_comments WHERE build_id = '$bid'";
	// $result = mysqli_query($conn, $sql);
	// while($row = mysqli_fetch_assoc($result)){
	// 	extract($row);

	// }

	// echo 'Build Id: '.$build_id.'<br>
	// 	Comment: '.$comment.'<br>
	// 	User Id: '.$user_id;
?>