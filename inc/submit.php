<?php
include('connection.php');

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['msg'];
if ($_POST['box'] == 'checked') {
    $optin = 'true';
    
} else {
    $optin = 'false';
}
$date = date('Y-m-d');
$array = ["$name", "$email", "$phone", "$subject", "$message" ];

$sql = "INSERT INTO contact_form (name, email, phone, subject, message, optin, date) VALUES (?, ?, ?, ?, ?, ?, ?);"; 
$getvars = '';

// Helps set URL to create GET global variables to tell site the field is empty
function var_empty($var) {
    global $getvars;
    //$varstr = substr("$var", 1);
    if ($getvars == '') {
    $getvars = "$var" . "=empty";
    } else {
        $getvars .= "&" . "$var" . "=empty";
    }
}
//  Helps set URL to create GET global variables to keep previous field entries
function var_exists($var) {
    global $getvars;
    // $varstr = substr("$var", 1);
    if ($getvars == '') {
    $getvars = '$var' . "=$var";
    } else {
        $getvars .= "&" . '$var' . "=$var";
    }
}

if (empty($name) || empty($email) || empty($phone) || empty($subject) || empty($message) ) {
    // Attempt to use array refactor a lot of below code using functions above (I tried)
    // for ($i = 0; $i <5; $i++) {
    //     validate_empty($array[$i]);
    // }
    if (empty($name)) {
        var_empty('name');
        } else {
        if ($getvars == '') {
            $getvars = "name" . "=$name";
        } else {
            $getvars .= "&" . "name" . "=$name";
        }
    }
    if (empty($email)) {
        var_empty('email');
    } elseif (! filter_var($email, FILTER_VALIDATE_EMAIL)) {
        if ($getvars == '') {
            $getvars = "email" . "=invalid";
        } else {
            $getvars .= "&" . "email" . "=invalid";
        }
    } else {
        if ($getvars == '') {
            $getvars = "email" . "=$email";
        } else {
            $getvars .= "&" . "email" . "=$email";
        }
    }
    if (empty($phone)) {
        var_empty('phone');
    } else {
        if ($getvars == '') {
            $getvars = "phone" . "=$phone";
        } else {
            $getvars .= "&" . "phone" . "=$phone";
        }
    }
    if (empty($subject)) {
        var_empty('subject');
    } else {
        if ($getvars == '') {
            $getvars = "subject" . "=$subject";
        } else {
            $getvars .= "&" . "subject" . "=$subject";
        }
    }
    if (empty($message)) {
        var_empty('message');
    } else {
        if ($getvars == '') {
            $getvars = "message" . "=$message";
        } else {
            $getvars .= "&" . "message" . "=$message";
        }
    }
    if ($optin == 'false') {
        var_empty('box');
    } else {
        if ($getvars == '') {
            $getvars = "box" . "=true";
        } else {
            $getvars .= "&" . "box" . "=true";
        }
    }
    // Redirect user to contact form but with new information
    header("Location: ../contactform.php?$getvars");
    exit();
} elseif (! filter_var($email, FILTER_VALIDATE_EMAIL)) {
        if ($getvars == '') {
            $getvars = "email" . "=invalid";
        } else {
            $getvars .= "&" . "email" . "=invalid";
        }
    // Redirect user to contact form but with new information
    header("Location: ../contactform.php?$getvars");
    exit();
} else {
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
        header("Location: ../contactform.php?submit=success");
    } catch (Exception $e) {
        echo "Unable to send form data" . $e->getMessage();
        header("location: ../contactform.php?submit=failed");
    }
}
 
