<?php
ob_start();
function header_title(){
	echo '<img src="images/header.gif" class="responsive-img"><br>myRagnarok db
	';
};

function get_title(){
	echo 'myRagnarok db';
};

function display_content(){
	global $conn;
	echo '<div class="container">
		<div class="row">
			<div class="col l12 m12 s12">
				<div class="bg z-depth-2 pan-padding center-align">
					<h2 class="center-align headline">Latest News <img src="images/lit.gif"></h2><hr>
					<h4>Ragnarok Philippines kicks off OBT!</h4>
					<img src="images/roph_obt.jpg" style="margin: 0 auto" class="responsive-img">
					<p>The RO Ph servers have once again opened it\'s doors to the public last June 29, 2017 after a successful Closed Beta. If you haven\'t joined in on all the fun and adventures during the CBT, now\'s your time to hop on to the servers and join thousands of fellow RO enthusiasts for Open Beta!
					<br><br>
					For more information, please visit their <a href="https://www.ragnarokonline.com.ph/main" target="_blank">official page</a>.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col l6 m12 s12">
				<div class="bg z-depth-2 pan-padding">
					<h4 class="center-align headline">Latest Builds <img src="images/no1.gif"></h4><hr>';
					$sql = "SELECT b.*,u.username FROM builds b JOIN users u ON b.acct_id = u.id
							ORDER BY b.id DESC LIMIT 5";
					$result = mysqli_query($conn, $sql);
					while($row = mysqli_fetch_assoc($result)){
						extract($row);
						echo '<div>
								<span><b>'.strtoupper($build_name).'</b></span><br>
								<span>Submitted by: '.$username.'</span><br>
								<span class="build-date"><i>'.$build_date.'</i></span>
							</div>
							<p>'.$build_description.'</p>';
							echo "<a href='build.php?build_id=$id'>View full build</a><hr>";
					}
				echo '</div>
			</div>
			<div class="col l6 m12 s12">
				<div class="bg z-depth-2 pan-padding">
					<h4 class="center-align headline">Media <img src="images/ho.gif"></h4><hr>
					<video class="responsive-video" controls>
						<source src="videos/ro_media.mp4" type="video/mp4">
					</video> 
				</div>
			</div>
		</div>
	</div>';
};

require_once 'template.php';
ob_end_flush();
?>