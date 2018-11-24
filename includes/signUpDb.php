<?php
//Checking with SignUp was clicked
if(  !(isset($_POST['signUp'])) ){
	header("Location: ../signUp.php?button=false");
	exit();
}

include "database.php";

$studentFirstName = mysqli_real_escape_string($connection, $_POST['studentFirstName']);
$studentLastName = mysqli_real_escape_string($connection, $_POST['studentLastName']);
$studentMajor = mysqli_real_escape_string($connection, $_POST['studentMajor']);
$studentEmail = mysqli_real_escape_string($connection, $_POST['studentEmail']);
$studentPassword = mysqli_real_escape_string($connection, $_POST['studentPassword']);
$studentJob = mysqli_real_escape_string($connection, $_POST['studentJob']);

//Checkig if I have any empty space
if(empty($studentFirstName) || empty($studentLastName) ||  empty($studentMajor) || empty($studentEmail) || empty($studentPassword) ){ 
	header("Location: ../signUp.php?empty=true"); exit();
}

//Checking if the name is valid
if(!preg_match("/^[a-zA-Z]*$/", $studentFirstName ) || !preg_match("/^[a-zA-Z]*$/", $studentLastName ) ){ header("Location: ../signUp.php?name=false"); exit();}

//Checking if the password is valid
if( !(filter_var( $studentEmail, FILTER_VALIDATE_EMAIL)) ){ header("Location: ../signUp.php?email=invalid"); exit(); }

//Checking if the email has been alredy used
$query = "SELECT * FROM subscription WHERE studentEmail = '$studentEmail';";
$query = mysqli_query($connection, $query);
$query = mysqli_num_rows($query);
if( $query != 0){header("Location: ../signUp.php?email=inUse"); exit();}

//hashing password
$studentPassword = password_hash($studentPassword, PASSWORD_DEFAULT);

//Inserting our data into subscription
$query = "INSERT INTO subscription(studentFirstName, studentLastName, studentMajor, studentEmail, studentPassword, studentJob) VALUES('$studentFisrtName', '$studentLastName', '$studentMajor', '$studentEmail', '$studentPassword', '$studentJob') ;";
mysqli_query($connection, $query);
header("Location: ../signUp.php?success=true");
?>

























