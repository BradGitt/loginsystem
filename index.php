<?php
	include_once 'header.php';
?>

<section class="main-container">
	<div class="main-wrapper">
		<h2>Meal Planner</h2>
		<?php
			if (isset($_SESSION['u_id'])){
				echo "You are logged in! <a href = 'addrecipe.php'> Click here to add a recipe</a> ";
			}
		?>
	</div>
</section>
  
<?php 
	include_once 'footer.php';
?>