<?php
include('connection.php');

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['msg'];
if (isset($_POST['box'])) {
    $optin = 'true';
} else {
    $optin = 'false';
}
$date = date('Y-m-d');
$array = ["$name", "$email", "$phone", "$subject", "$message" ];

$sql = "INSERT INTO contact_form (name, email, phone, subject, message, optin, date) VALUES (?, ?, ?, ?, ?, ?, ?);"; 
$getvars = '';

// function validate_empty($var) {
//     if (empty($var)) {
//         if ($getvars == '') {
//         $getvars = "$var" . "=empty";
//         } else {
//             $getvars .= "&" . "$var" . "=empty";
//         }
//     }
// } 

if (empty($name) || empty($email) || empty($phone) || empty($subject) || empty($message) ) {
    // Attempt to refactor below code using function above
    // for ($i = 0; $i <5; $i++) {
    //     validate_empty($array[$i]);
    // }
    if (empty($name)) {
        if ($getvars == '') {
            $getvars = "name" . "=empty";
        } else {
            $getvars .= "&" . "name" . "=empty";
        }
    } else {
        if ($getvars == '') {
            $getvars = "name" . "=$name";
        } else {
            $getvars .= "&" . "name" . "=$name";
        }
    }
    if (empty($email)) {
        if ($getvars == '') {
            $getvars = "email" . "=empty";
        } else {
            $getvars .= "&" . "email" . "=empty";
        }
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
        if ($getvars == '') {
            $getvars = "phone" . "=empty";
        } else {
            $getvars .= "&" . "phone" . "=empty";
        }
    } else {
        if ($getvars == '') {
            $getvars = "phone" . "=$phone";
        } else {
            $getvars .= "&" . "phone" . "=$phone";
        }
    }
    if (empty($subject)) {
        if ($getvars == '') {
            $getvars = "subject" . "=empty";
        } else {
            $getvars .= "&" . "subject" . "=empty";
        }
    } else {
        if ($getvars == '') {
            $getvars = "subject" . "=$subject";
        } else {
            $getvars .= "&" . "subject" . "=$subject";
        }
    }
    if (empty($message)) {
        if ($getvars == '') {
            $getvars = "message" . "=empty";
        } else {
            $getvars .= "&" . "message" . "=empty";
        }
    } else {
        if ($getvars == '') {
            $getvars = "message" . "=$message";
        } else {
            $getvars .= "&" . "message" . "=$message";
        }
    }
    if ($optin == false) {
        if ($getvars == '') {
        $getvars = "box" . "=empty";
    } else {
        $getvars .= "&" . "box" . "=empty";
    }
    } else {
        if ($getvars == '') {
            $getvars = "box" . "=true";
        } else {
            $getvars .= "&" . "box" . "=true";
        }
    }
    header("Location: ../contactform.php?$getvars");
    exit();
} elseif (! filter_var($email, FILTER_VALIDATE_EMAIL)) {
        if ($getvars == '') {
            $getvars = "email" . "=invalid";
        } else {
            $getvars .= "&" . "email" . "=invalid";
        }
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
        //mysqli_query($db, $sql);
        header("Location: ../contactform.php?submit=success");
    } catch (Exception $e) {
        echo "Unable to send form data" . $e->getMessage();
        header("location: ../contactform.php?submit=failed");
    }
}
 
