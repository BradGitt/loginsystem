<?php
	include_once 'header.php';
?>

<section class="main-container">
	<div class="main-wrapper">
		<h2>Sign up</h2>
		<form class ="signup-form" action="includes/signup-inc.php" method="POST">

			<input type="text" name="fname" placeholder="First Name">
			<input type="text" name="lname" placeholder="Last Name">
			<input type="text" name="enumber" placeholder="Emergency Contact Number">
			<input type="text" name="uname" placeholder="Username">
			<input type="password" name="upass" placeholder="Password">
			<input type="text" name="diettype" placeholder="Please enter your diet type">
			<input type="text" name="sex" placeholder="Type M or F to represent your sex">
			<input type="text" name="diabetic" placeholder="Type Y if you are diabetic N if not">
			<input type="text" name="weight" placeholder="Please enter your weight ">
			<input type="text" name="age" placeholder="Please enter your age">
			<button type="submit" name="submit">Sign up</button>
			
		</form>
	</div>
</section>
  
 <?php
	include_once 'footer.php';
?>
  
