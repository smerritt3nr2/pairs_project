<?php 
require_once("connection.php");
$status = "";
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $response = $_POST["g-recaptcha-response"];

  $url = 'https://www.google.com/recaptcha/api/siteverify';
  $data = array(
	'secret' => '6LeVvfwUAAAAAGx_aqK3T8smEMW51x679jpzrHg3',
	'response' => $_POST["g-recaptcha-response"]
  );
  $options = array(
	'http' => array (
		'method' => 'POST',
		'content' => http_build_query($data)
	)
  );
  $context  = stream_context_create($options);
  $verify = file_get_contents($url, false, $context);
  $captcha_success=json_decode($verify);

  if ($captcha_success->success==false) { 
	$status = "Please check you are not a robot";
  } else if ($captcha_success->success==true) {
    if(!isset($_POST['agreement'])){
        $status = "Please check you agree";
    } else {
        if(empty($name) || empty($email) || empty($message)) {
            $status = "All fields are compulsory.";
        } else {
            if(strlen($name) >= 255 || !preg_match("/^[a-zA-Z-'\s]+$/", $name)) {
            $status = "Please enter a valid name";
            } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $status = "Please enter a valid email";
            } else {

            $sql = "INSERT INTO contacts (name, email, message) VALUES (:name, :email, :message)";

            $stmt = $pdo->prepare($sql);
            
            $stmt->execute(['name' => $name, 'email' => $email, 'message' => $message]);

            ////////////////////////////////////////////////////////////////////////////////
            //              This is the email code which works when using a live server
            // $mailTo = "Jeremy.lee@netmatters-scs.com";
            // $headers = "From: ". $email;
            // $txt = "You have received an e-mail from ". $name. ".\n\n".$message;
        
            // mail($mailTo, $txt, $headers);
            // header("Location: index.php?mailsend");
            /////////////////////////////////////////////////////////////////////////////////

            $status = "Your message was sent";
            $name = "";
            $email = "";
            $message = "";
            }
        }
    }
  }

}