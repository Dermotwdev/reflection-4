<?php
include('connection.php');

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['msg'];
fixedif ($_POST['box']) {
    $optin = 'true';
} else {
    $optin = 'false';
}
$date = date('Y-m-d');

// $name, $email, $phone, $subject, $message, $optin
$sql = "INSERT INTO contact_form (name, email, phone, subject, message, optin, date) VALUES (?, ?, ?, ?, ?, ?, ?);"; 
try {
    // create a prepared statement
    $stmt = mysqli_stmt_init($db);
    try {
        mysqli_stmt_prepare($stmt, $sql);
    } catch (Exception $e) {
        $e->getMessage();
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ssissss", $name, $email, $phone, $subject, $message, $optin, $date);
    mysqli_stmt_execute($stmt);
    //mysqli_query($db, $sql);
    header("Location: ../contactform.php?submit=success");
} catch (Exception $e) {
    echo "Unable to send form data" . $e->getMessage();
    header("location: ../contactform.php?submit=failed");
}
 
