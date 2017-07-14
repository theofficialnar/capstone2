<?php 
require_once 'connection.php';
$change = $_GET['dis'];

if($change == 'more'){
	$sql = "SELECT DISTINCT b.*,c.class_icon,u.username FROM classes c JOIN skills s ON c.class_name=s.class JOIN skill_sims ss ON ss.skill_id=s.id JOIN builds b ON ss.build_id=b.id JOIN users u ON b.acct_id = u.id ORDER BY b.id DESC";
	$result = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_assoc($result)){
		extract($row);
		echo "<div class='col l6 m6 s12'>
			<a href='build.php?build_id=$id' style='color: inherit'>";
				echo '<div class="card small indigo lighten-3 z-depth-5">
					<div class="card-content">
						<div class="center-align">
							<img src="'.$class_icon.'" class="responsive-img">
						</div>
						<span class="card-title center-align black-text"><b>'.strtoupper($build_name).'</b></span><hr>
						<p class="build-date black-text">'.$build_date.'</p>
						<p class="build-creator black-text"> Submitted by: '.$username.'</p>
						<p class="black-text">'.ucfirst($build_description).'</p>
					</div>
				</div>
			</a>
		</div>';
	};
};

if($change == 'less'){
	$sql = "SELECT DISTINCT b.*,c.class_icon,u.username FROM classes c JOIN skills s ON c.class_name=s.class JOIN skill_sims ss ON ss.skill_id=s.id JOIN builds b ON ss.build_id=b.id JOIN users u ON b.acct_id = u.id ORDER BY b.id DESC LIMIT 6";
	$result = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_assoc($result)){
		extract($row);
		echo "<div class='col l6 m6 s12'>
			<a href='build.php?build_id=$id' style='color: inherit'>";
				echo '<div class="card small indigo lighten-3 z-depth-5">
					<div class="card-content">
						<div class="center-align">
							<img src="'.$class_icon.'" class="responsive-img">
						</div>
						<span class="card-title center-align black-text"><b>'.strtoupper($build_name).'</b></span><hr>
						<p class="build-date black-text">'.$build_date.'</p>
						<p class="build-creator black-text"> Submitted by: '.$username.'</p>
						<p class="black-text">'.ucfirst($build_description).'</p>
					</div>
				</div>
			</a>
		</div>';
	};
}
?>
