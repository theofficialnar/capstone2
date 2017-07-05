<ul id="slide-out" class="side-nav fixed">
	<li><div>
		<div class="background">
			<div class="user-view center-align">
				<img src="images/user_default.png" alt="user_photo" class="circle" id="profile-photo">
				<?php
				if(isset($_SESSION['loginFlag']) && $_SESSION['loginFlag'] == true){
					echo '<span class="user-welcome">Hello, ' .$_SESSION['username']. '!</span>';
				}else{
					echo '<span class="user-welcome">Hello, guest!</span>';
				}
				?>
			</div>
		</div>
	</div></li>
	<?php
		if(!isset($_SESSION['loginFlag'])){
			echo '<li> <a href="#modal1">Login</a> </li>';
		}
		?>
	<li><a href="index.php">Home</a></li>
	<?php
		if(isset($_SESSION['loginFlag']) && $_SESSION['loginFlag'] == true && $_SESSION['role'] == 'admin'){
			echo '<li><a href="add_skill.php">Add Skills</a></li>';
		}
		?>
	<?php
		if(isset($_SESSION['loginFlag']) && $_SESSION['loginFlag'] == true){
			echo '<li><a href="my_builds.php">My Builds</a></li>';
		}
		?>
	<li><a href="skill_db.php">Skill Database</a></li>
	<li><a href="skill_sim.php">Skill Simulator</a></li>
	<?php
		if(isset($_SESSION['loginFlag']) && $_SESSION['loginFlag'] == true){
			echo '<li><a href="?logOut">Logout</a></li>';
		}
	?>
</ul>
<a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>


<?php

if(isset($_GET['logOut'])){
	unset($_SESSION['username']);
	unset($_SESSION['role']);
	unset($_SESSION['loginFlag']);
	unset($_SESSION['id']);
	header('location: index.php');
}

?>