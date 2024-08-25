<?php 
/**
 * Processing forms
 */
require("functions/functions.php");
//submitting form
if(isset($_POST['submit'])){

	$fname = trim($_POST['firstname']);
	$lname = trim($_POST['lastname']);
	$email = trim($_POST['email']);
	$password = trim($_POST['password']);



	$errors = array();

	if(empty($fname)){

		$errors[] = "<p><strong>Please enter your firstname</strong></p>";

	}

	if(empty($lname)){
		$errors[] = "<p><strong>Please enter your lastname</strong></p>";
	}

	if(empty($email)){
		$errors[] = "<p><strong>Please enter your email</strong></p>";
	}

	if(empty($password)){
		$errors[] = "<p><strong>Please enter your password</strong></p>";
	}


	if(empty($errors)){
		//there are no errors
		registerUser($fname, $lname, $email, $password);
	}else{
		//there are errors
		foreach($errors as $error){
			echo "$error";
		}
	}



}