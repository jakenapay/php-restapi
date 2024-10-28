<?php

// get database connection
include_once '../config/config.php';
// instantiate user object
include_once '../objects/user.php';

$database = new Database();
$db = $database->getConnection();

$user = new User($db);

// set user property values
$user->name = $_POST['name'];
$user->email = $_POST['email'];
$user->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$user->role = isset($_POST['role']) ? $_POST['role'] : 'user';

// create the user
if ($user->signup()) {
    $user_arr = array(
        "status" => true,
        "message" => "Registered Successfully!",
        "id" => $user->id,
        "name" => $user->name,
        "email" => $user->email,
        "password" => $user->password,
        "role" => $user->role
    );
    // redirect user
    echo '<script>
        alert("' . $user_arr['message'] . '");
        window.location.href = "../../login.php"; 
    </script>';
    exit();
} else {
    $user_arr = array(
        "status" => false,
        "message" => "Username already exists!"
    );
    echo '<script>
        alert("' . $user_arr['message'] . '");
        window.location.href = "../../signup.php"; 
    </script>';
    exit();

}
// print_r(json_encode($user_arr));
?>