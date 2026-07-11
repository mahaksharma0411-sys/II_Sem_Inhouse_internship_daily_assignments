<?php
include('db_connect.php');
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
$name = mysqli_real_escape_string($conn, $_GET['name']);
$branch = mysqli_real_escape_string($conn, $_GET['branch']);
$email = $_GET['email'];
$phoneNumber = $_GET['phoneNumber'] ;
$sql = "INSERT INTO user (name, branch, phone_number)
VALUES ('$name', '$branch', '$phoneNumber')";
if (mysqli_query($conn, $sql)) {
echo "Student Registered Successfully!";
} else {
echo "Error: " . mysqli_error($conn);
}
}

$name = $_GET["name"];
$branch =$_GET["branch"];
$email = $_GET["email"];
$phoneNumber =$_GET["phoneNumber"];


//empty
if (empty($name)){
     echo "Name is empty <br>";
}
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo"email is invalid";
}
if(!is_numeric($phoneNumber)){
    echo "invalid phone number";
}
echo "<div class='alert alert-danger'>";
echo "<ul>";

echo "</ul>";
echo "</div>";
echo "values recived:$name $branch $email $phoneNumber";

?>