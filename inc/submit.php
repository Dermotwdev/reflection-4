<?php
include('connection.php');

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['msg'];
$optin = $_POST['box'];

$sql = "INSERT INTO contact_form (name, email, phone, subject, message, optin, date) VALUES ($name, $email, $phone, $subject, $message, $optin)"; 
try {
    mysqli_query($db, $sql);
} catch (Exception $e) {
    echo "Unable to send form data" . $e->getMessage();
}
 
//header("Location: ../contactform.php?submit=success");