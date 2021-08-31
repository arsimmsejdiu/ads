<?php
if (isset($_POST['user_email']) && isset($_POST['user_password'])) {

    // CHECK IF FIELDS ARE NOT EMPTY
    if (!empty(trim($_POST['user_email'])) && !empty(trim($_POST['user_password']))) {


        // Escape special characters.
        $user_email = mysqli_real_escape_string($db_connection, htmlspecialchars(trim($_POST['user_email'])));

        $query = mysqli_query($db_connection, "SELECT * FROM `users` WHERE user_email = '$user_email'");

        if (mysqli_num_rows($query) > 0) {

            $row = mysqli_fetch_assoc($query);
            $user_db_pass = $row['user_password'];
            $user_id = $row['user_id'];
            $user_name = $row['user_name'];

            // VERIFY PASSWORD
            $check_password = password_verify($_POST['user_password'], $user_db_pass);

            if ($check_password === TRUE) {

                //session_regenerate_id(true);

                $_SESSION['user_email'] = $user_email;
                $_SESSION['user_name'] = $user_name;
                $_SESSION['user_id'] = $user_id;
                header('Location: index.php');
                exit;
            } else {
                // INCORRECT PASSWORD
                $error_message = "Incorrect Email Address or Password.";
            }
        } else {
            // EMAIL NOT REGISTERED
            $error_message = "Incorrect Email Address or Password.";
        }
    } else {

        // IF FIELDS ARE EMPTY
        $error_message = "Please fill in all the required fields.";
    }
}

// if ($row == 1) {
//     if ($data['user_password'] === $password) {
//         $_SESSION['user_name'] = $data['user_name'];
//         $_SESSION['user_id'] = $data['user_id'];
//         header('Location:index.php');
//     } else header('Location:error.php?login_error');
// } else header('Location:error.php?login_doesnt_exists');