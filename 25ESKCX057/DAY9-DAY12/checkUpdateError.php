<?php 

if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

include ('db_connect.php');
$error = "";
$new_password="";
$confirm_new_password = "";
$current_password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $new_password = $_POST["new_password"];
    $confirm_new_password = $_POST["confirm_new_password"];
    $current_password = $_POST["current_password"];

    // Validate passwords
    if (empty($new_password) || empty($confirm_new_password) || empty($current_password)) {
        $error = "Please fill in all fields.";
    } else {
        if ($new_password !== $confirm_new_password) {
            $error = "New passwords do not match.";
            echo $error;
        } elseif (empty($_SESSION['user_id'])) {
            echo "User session not found.";
        } else {
            $user_id = intval($_SESSION['user_id']);
            $selectQuery = "SELECT * FROM user WHERE id = $user_id";

            $result = mysqli_query($conn, $selectQuery);
            $user = mysqli_fetch_assoc($result);
            
            if ($user && $user["password"] === $current_password) {
                $new_password_safe = mysqli_real_escape_string($conn, $new_password);
                $updateQuery = "UPDATE user SET password = '$new_password_safe' WHERE id = $user_id";

                mysqli_query($conn, $updateQuery);
                header("Location: updateSuccess.php");
                exit();
            } elseif ($user) {
                echo "Current password is incorrect.";
            } else {
                echo "User not found.";
                echo "Error: " . mysqli_error($conn);
            }
        }
    }
}
            
           

            
?>
     


