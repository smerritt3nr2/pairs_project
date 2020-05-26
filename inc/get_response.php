<?php 
require_once("connection.php");
var_dump($dbh);
//if((isset($_POST['your_name'])&& $_POST['your_name'] !='') && (isset($_POST['your_email'])&& $_POST['your_email'] !=''))
if((isset($_POST['submit'])))
{
    require_once("contactform.php");

    $yourName = $dbh->real_escape_string($_POST['Name']);
    $yourEmail = $dbh->real_escape_string($_POST['Email']);
    $yourPhone = $dbh->real_escape_string($_POST['Number']);
    $comments = $dbh->real_escape_string($_POST['Message']);
    $sql="INSERT INTO contacts (name, email, phone, comments) VALUES ('".$yourName."','".$yourEmail."', '".$yourPhone."', '".$comments."')";
    if(!$result = $dbh->query($sql)){
        die('There was an error running the query [' . $dbh->error . ']');
    }
    else
    {
        echo "Thank you! We will contact you soon";
    }
}
else
{
echo "Please fill Name and Email";
}




// include(__DIR__ . '/connection.php');

// $ID = [];
// $name = [];
// $email = [];
// $telephone = [];
// $message = [];

// foreach($contacts as $contact){
//     $ID[] =  $contact['ID'];
//     $name[] = $contact['Name'];
//     $email[] =  $contact['Email'];
//     $telephone[] = $contact['Telephone'];
//     $message[] =  $contact['Message'];
// }