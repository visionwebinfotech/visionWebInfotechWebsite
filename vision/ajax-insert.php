<?php

//$first_name = $_POST["first_name"];
//$last_name = $_POST["last_name"];

$first_name = "";
if(isset($_POST['first_name']) && $_POST['first_name']!='') {
	$first_name = filter_var($_POST['first_name'], FILTER_SANITIZE_STRING);
}

$last_name = "";
if(isset($_POST['last_name']) && $_POST['last_name']!='') {
	$last_name = filter_var($_POST['last_name'], FILTER_SANITIZE_STRING);
}

$mobile_number= "";
if(isset($_POST['mobile_number']) && $_POST['mobile_number']!='') {
	$mobile_number = filter_var($_POST['mobile_number'], FILTER_SANITIZE_STRING);
}

$email_id= "";
if(isset($_POST['email_id']) && $_POST['email_id']!='') {
	$email_id =  filter_var($_POST['email_id'], FILTER_SANITIZE_STRING);
}

$message= "";
if(isset($_POST['message']) && $_POST['message']!='') {
	$message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
}
//print_r($_POST);die();
//require_once("config.php");
$conn = mysqli_connect("localhost","root","","visionwebinfotech") or die("Connection Failed");

//$sql = "INSERT INTO students(first_name, last_name) VALUES ('{$first_name}','{$last_name}')";
 $sqlInsert="INSERT INTO enquiry_details (first_name,last_name,email_id,mobile_number,message) values('$first_name','$last_name','$email_id','$mobile_number','$message')";

if(mysqli_query($conn, $sqlInsert)){
  echo 1;
}else{
  echo 0;
}


?>
