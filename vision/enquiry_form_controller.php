<?php
echo "here";die();
use Phppot\Captcha;
use Phppot\Contact;
require_once("config.php");

if(isset($_POST['submit']) && !empty($_POST['submit'])) {

require_once "./Model/Captcha.php";
$captcha = new Captcha();
if (count($_POST) > 0) {
    $userCaptcha = filter_var($_POST["captcha_code"], FILTER_SANITIZE_STRING);
    $isValidCaptcha = $captcha->validateCaptcha($userCaptcha);
    if ($isValidCaptcha) {
		
		
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

$ip_address=$_SERVER['REMOTE_ADDR'];
/*Get user ip address details with geoplugin.net*/
//$geopluginURL='http://www.geoplugin.net/php.gp?ip='.$ip_address;
$geopluginURL='';
$addrDetailsArr = unserialize(file_get_contents($geopluginURL));
/*Get City name by return array*/
$city = $addrDetailsArr['geoplugin_city'];
/*Get Country name by return array*/
$country = $addrDetailsArr['geoplugin_countryName'];
/*Comment out these line to see all the posible details*/
/*echo '<pre>';
print_r($addrDetailsArr);
die();*/
if(!$city){
   $city='Not Define';
}if(!$country){
   $country='Not Define';
}
//echo '<strong>IP Address</strong>:- '.$ip_address.'<br/>';
//echo '<strong>City</strong>:- '.$city.'<br/>';
//echo '<strong>Country</strong>:- '.$country.'<br/>';
   
////
//print_r($_POST);
//exit;
if($first_name=="" && $mobile_number=="" && $message==""){
	echo "Some Field are blanks <br>";
	echo "<a href='https://www.bharatparivaartrust.org/'>Back to Enquery Form</a>";
	die();
}
 $sqlInsert="INSERT INTO enquiry_details (first_name,last_name,email_id,mobile_number,message,country,city,ip_address) values('$first_name','$last_name','$email_id','$mobile_number','$message','$country','$city','$ip_address')";
} else {
        //echo $error_message = "Incorrect Captcha Code";
		header("Location:index.php?page=contact_us&message=Incorrect Security code");
		die();
    }
}
  if($conn->query($sqlInsert)){	
			?>
			<script>
				alert("Enqiry message send successfuly");
				window.location.replace("index.php?page=contact_us&message=Enqiry message send successfuly");
			</script>
			<?php
	 		header("Location:index.php?page=contact_us&message=Enqiry message send successfuly");
		   exit;
	}else{
	 header("Location:index.php?page=contact_us&message=Error found");
		exit;
	 	echo "failed".$conn->error;
  		}
		

}	

?>