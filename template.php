<?php
	session_start();
	require_once 'lib/connection.php';
	require_once 'lib/library.php';


	?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php get_title() ?></title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="styles/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="styles/styles.css">
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>

</head>
<body>
	<nav>
	<?php
	require_once 'partials/side_nav.php';
	require_once 'partials/header.php';
	?>
	</nav>


	<main>
		<?php
		display_content();
		?>
	</main>

	<?php
	require_once 'partials/login.php';
	?>

	<script>
		$(".button-collapse").sideNav();

		$(document).ready(function() {
		    $('select').material_select();
			});

		$(document).ready(function(){
   				$('.modal').modal();
  			});

		function myFunction(id){
			document.getElementById("span"+id).innerHTML = counter;	
		};

		function level(val,id){
			var skillName = id.substring(3);
			var maxLevel = document.getElementById("max"+skillName).innerHTML;
			var max = parseInt(maxLevel,10);
			var level = document.getElementById("level"+skillName).value;
			var new_level = parseInt(level,10) + val;
			document.getElementById("level"+skillName).value = new_level;

			if(new_level == max){
				document.getElementById("add"+skillName).style.visibility = "hidden";
			}

			if(new_level < max){
				document.getElementById("add"+skillName).style.visibility = "visible";
			}

			if(new_level == 0){
				document.getElementById("min"+skillName).style.visibility = "hidden";
			}

			if(new_level > 0){
				document.getElementById("min"+skillName).style.visibility = "visible";
			}

			return new_level;
		}
	</script>
		

</body>
</html>