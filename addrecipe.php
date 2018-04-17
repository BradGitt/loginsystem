<?php
	include_once 'header.php';
	require 'includes/addrecipe-inc.php';
	$ingredients1 = $db->query("Select ingrename from ingredients");
	$ingredients2 = $db->query("Select ingrename from ingredients");
	$ingredients3 = $db->query("Select ingrename from ingredients");
	$ingredients4 = $db->query("Select ingrename from ingredients");
	$ingredients5 = $db->query("Select ingrename from ingredients");
	$ingredients6 = $db->query("Select ingrename from ingredients");
?>

<section class="main-container">
	<div class="main-wrapper">
		<h2>Add a recipe</h2>
		<?php
			if (isset($_SESSION['u_id'])){
				echo "<div id ='msg'> Add recipes here</div>";
			}
		?>
	</div>
	<div class="ingredint form1">
		
		<form class ="signup-form" action="includes/addrecipe-inc.php" method="POST">

			<input type="text" name="recipename" placeholder="Type recipe name">
			</form>
		
	</div>
	<div class="ingredint form2">
		<form class ="signup-form" id="inform" action="includes/addrecipe-inc.php" method="get">

			<select> name="ingredients"
				<option value="">Choose an ingredient </option>
				<?php foreach ($ingredients1->fetchAll() as $ingredients1):?>
					<option value="<?php echo $ingredients1['ingrename'];?>"><?php echo $ingredients1['ingrename']; ?></option>
				<?php endforeach;?>

			</select>
			<select> name="ingredients"
				<option value="">Choose an ingredient </option>
				<?php foreach ($ingredients2->fetchAll() as $ingredients2):?>
					<option value="<?php echo $ingredients2['ingrename'];?>"><?php echo $ingredients2['ingrename']; ?></option>
				<?php endforeach;?>

			</select>
			<select> name="ingredients"
				<option value="">Choose an ingredient </option>
				<?php foreach ($ingredients3->fetchAll() as $ingredients3):?>
					<option value="<?php echo $ingredients3['ingrename'];?>"><?php echo $ingredients3['ingrename']; ?></option>
				<?php endforeach;?>

			</select>
			<select> name="ingredients"
				<option value="">Choose an ingredient </option>
				<?php foreach ($ingredients4->fetchAll() as $ingredients4):?>
					<option value="<?php echo $ingredients4['ingrename'];?>"><?php echo $ingredients4['ingrename']; ?></option>
				<?php endforeach;?>

			</select>
			<select> name="ingredients"
				<option value="">Choose an ingredient </option>
				<?php foreach ($ingredients5->fetchAll() as $ingredients5):?>
					<option value="<?php echo $ingredients5['ingrename'];?>"><?php echo $ingredients5['ingrename']; ?></option>
				<?php endforeach;?>

			</select>
				<select> name="ingredients"
				<option value="">Choose an ingredient </option>
				<?php foreach ($ingredients6->fetchAll() as $ingredients6):?>
					<option value="<?php echo $ingredients6['ingrename'];?>"><?php echo $ingredients6['ingrename']; ?></option>
				<?php endforeach;?>

			</select>


			</form>

			
	</div>

</section>
  
<?php 
	include_once 'footer.php';
?>