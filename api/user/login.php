<?php
// include database and object files
include_once '../config/config.php';
include_once '../objects/user.php';

session_start();

// get database connection
$database = new Database();
$db = $database->getConnection();

// prepare user object
$user = new User($db);

// set email and password properties from GET parameters
$user->email = isset($_GET['email']) ? $_GET['email'] : die(json_encode(["status" => false, "message" => "No email provided."]));
$password = isset($_GET['password']) ? $_GET['password'] : die(json_encode(["status" => false, "message" => "No password provided."]));

// Attempt to login
$stmt = $user->login();

if ($stmt->rowCount() > 0) {
    // get retrieved row
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    // Verify the password (uses password_verify)
    if (password_verify($password, $row['password'])) {
        // set session variables
        $_SESSION['message'] = "Successfully Login!";
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['role'] = $row['role'];

        // prepare response
        $user_arr = array(
            "status" => true,
            "message" => "Successfully Login!",
            "id" => $row['id'],
            "name" => $row['name'],
            "email" => $row["email"],
            "role" => $row["role"]
        );

        $_SESSION["user_arr"] = $user_arr;
        // redirect the user to home page
        header("Location: ../../index.php");
    } else {
        $user_arr = array(
            "status" => false,
            "message" => "Invalid Username or Password!"
        );
        echo '<script>
        alert("'. $user_arr['message'] .'");
        window.location.href = "../../login.php"; // Redirect to the login page
      </script>';
        exit();
    }
} else {
    $user_arr = array(
        "status" => false,
        "message" => "Invalid Username or Password!"
    );
    echo '<script>
        alert("'. $user_arr['message'] .'");
        window.location.href = "../../login.php"; // Redirect to the login page
      </script>';
    exit(); 
}

// make it json format
// echo json_encode($user_arr);
?>