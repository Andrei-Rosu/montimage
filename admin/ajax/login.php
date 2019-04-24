<?php
// Allow the config
define('__CONFIG__', true);
require_once "../config.php";
require_once "../../config.php";
include_once "../../includes/connection.php";
include_once "../../includes/Filter.php";
$db = Database::connect();


if($_SERVER['REQUEST_METHOD'] == 'POST') {


    $return = [];

    $email = Filter::String( $_POST['email'] );
    $password = $_POST['password'];


    // Make sure the user does not exist.
    $findUser = $db->prepare("SELECT user_id, password FROM users WHERE email = LOWER(:email) LIMIT 1");
    $findUser->bindParam(':email', $email, PDO::PARAM_STR);
    $findUser->execute();

    if($findUser->rowCount() == 1) {
        // User exists, we sign user in

        $User = $findUser->fetch(PDO::FETCH_ASSOC);
        $user_id = (int) $User['user_id'];
        $hash = (string)$User['password'];
        if(password_verify($password, $hash)){
            // User is signed in
            $return['redirect'] = 'index.php';
            $_SESSION['user_id'] = $user_id;
        }else{
            //Invalid email/password
            $return['error'] = 'Invalid user/email combo';
        }

        $return['error'] = "You already have an account";

    } else {
        // User does not exist, tell the user to back off :)
        $return['error'] = "you have nothing to see around here";


    }

    echo json_encode($return, JSON_PRETTY_PRINT); exit;
} else {
    // Die. Kill the script. Redirect the user. Do something regardless.
    exit('Invalid URL');
}
