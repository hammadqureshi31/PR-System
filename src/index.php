<?php
	include_once('header.php');
?>

	<section class="main-content">
		<h2>Welcome to license-vehicle-management-system</h2>
		<br>
		<p>
<?php
	if (!empty($_SESSION['officer'])) {
?>		
		
		You are logged in successfully.
<?php
	}
	else {
?>
		Please log in into license-vehicle-management-system
<?php	
	}
?>
		<br><br>
		Use a menu at the top of the website.
		</p>
	</section>
	
<?php
	include_once('footer.php');
?>
