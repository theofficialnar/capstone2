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
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
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
	require_once 'partials/footer.php';
	require_once 'partials/chat_box.php';
	require_once 'partials/login.php';
	require_once 'partials/preloader.php';
	?>

	<script src="js/scripts.js"></script>
		

</body>
</html>