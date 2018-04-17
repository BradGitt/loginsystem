<?php
session_start();

if (isset($_POST['submit'])){
	include 'dbh-inc.php';

	$uname = mysqli_real_escape_string($conn,$_POST['uname']);
	$upass = mysqli_real_escape_string($conn,$_POST['upass']);

	//Error handlers
	//Empty fields
	if (empty($uname) || empty($upass)){
		header("Location: ../index.php?login=empty");
		exit();


	} else{
		$sql = "SELECT * FROM users WHERE uname='$uname'";
		$result=mysqli_query($conn,$sql);
		$resultCheck =mysqli_num_rows($result);
		if ($resultCheck<1){
			header("Location: ../index.php?login=error");
			exit();
        } else {
        	if($row=mysqli_fetch_assoc($result)) {
        		//de-hash password
        		$hashedpwdcheck=password_verify($upass,$row['upass']);
        		if ($hashedpwdcheck== false){
        			header("Location: ../index.php?login=error");
        			exit();

        		} elseif ($hashedpwdcheck== true){
        			//Log in the user here 
        			$_SESSION['u_id'] = $row['uid'];
        			$_SESSION['u_first'] = $row['fname'];
        			$_SESSION['u_last'] = $row['lname'];
        			$_SESSION['u_enumber'] = $row['enumber'];
        			$_SESSION['u_uid'] = $row['uname'];
                                $_SESSION['u_dietype'] = $row['diettype'];
                                $_SESSION['u_sex'] = $row['sex'];
                                $_SESSION['u_diabetic'] = $row['diabetic'];
                                $_SESSION['u_weight'] = $row['weight'];
                                $_SESSION['u_age'] = $row['age'];
        			header("Location: ../index.php?login=success");
        			exit();

        		}
        	}
        }

	}
    
} else {
	header("Location:../index.php?login=error");
	exit();
}
