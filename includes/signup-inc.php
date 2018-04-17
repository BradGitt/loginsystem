<?php  

if (isset($_POST['submit'])){

	include_once 'dbh-inc.php';

	$fname = mysqli_real_escape_string($conn,$_POST['fname']);
	$lname = mysqli_real_escape_string($conn,$_POST['lname']);
	$enumber = mysqli_real_escape_string($conn,$_POST['enumber']);
	$uid = mysqli_real_escape_string($conn,$_POST['uname']);
	$upass = mysqli_real_escape_string($conn,$_POST['upass']);
	$diettype = mysqli_real_escape_string($conn,$_POST['diettype']);
	$sex = mysqli_real_escape_string($conn,$_POST['sex']);
	$diabetic = mysqli_real_escape_string($conn,$_POST['diabetic']);
	$weight = mysqli_real_escape_string($conn,$_POST['weight']);
	$age = mysqli_real_escape_string($conn,$_POST['age']);

	//Error handlers
	//Empty fields
	if (empty($fname)|| empty($lname) || empty($enumber) || empty($uid) || empty($upass)){
		header("Location: ../signup.php?signup=empty");
		exit();


	} else {
		//check if input valid
		if(!preg_match("/^[a-zA-Z]*$/", $fname)|| !preg_match("/^[a-zA-Z]*$/", $lname)){
			header("Location: ../signup.php?signup=invalid");
			exit();
	} 	  else{
			//check if username already exists
			$sql="SELECT*FROM users WHERE uid='$uid'";
			$result= mysqli_query ($conn,$sql);
			$resultCheck= mysqli_num_rows($result);

			if($resultCheck > 0){
				header("Location: ../signup.php?signup=usertaken");
				exit();

			} else{
				//Password Hash
				$hashedpwd = password_hash($upass,PASSWORD_DEFAULT);
				//Insert Form Information into database
				$sql="INSERT INTO users(fname,lname,enumber,uname,upass,diettype,sex,diabetic,weight,age) VALUES('$fname','$lname','$enumber','$uid','$hashedpwd','$diettype','$sex','$diabetic','$weight','$age');";
				mysqli_query($conn,$sql);
				header("Location: ../signup.php?signup=success");
				exit();

			}

		}
		

	}




} else{
	header("Location: ../signup.php");
	exit();
}