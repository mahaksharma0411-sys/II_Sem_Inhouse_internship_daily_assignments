<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $branch = $_POST["branch"];
    $phone = $_POST["phoneNumber"];

    $folder = "uploads/";
    if (!is_dir($folder)) {
        mkdir($folder, 0777, true);
    }

    $extension = strtolower(pathinfo($_FILES["myfile"]["name"], PATHINFO_EXTENSION));
    $newName = time() . "_" . rand(1000, 9999) . "." . $extension;
    $targetFile = $folder . $newName;

    if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetFile)) {
        echo "<div style='font-family: Arial; margin: 20px; padding: 20px; border: 1px solid green; background: #f0fff0;'>";
        echo "<h2>🎉 Registration Successful!</h2>";
        echo "<b>Name:</b> $name <br>";
        echo "<b>Branch:</b> $branch <br>";
        echo "<b>Email:</b> $email <br>";
        echo "<b>Phone:</b> $phone <br><br>";
        echo "<b>Profile Photo:</b><br><br>";
        echo "<img src='$targetFile' width='200' style='border-radius: 8px;'>";
        echo "<br><br><a href='registrationphoto.php'>BACK TO FORM </a>";
        echo "</div>";
        exit();
    } else {
        echo "Photo upload mein error aayi hai.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>All In One Registration</title>
</head>
<body style="font-family: Arial; margin: 30px;">

    <h2>Registration Form (With Photo)</h2>
    
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="text" name="name" placeholder="ENTER YOUR NAME" required><br><br>
        <input type="email" name="email" placeholder="ENTER YOUR EMAIL" required><br><br>
        <input type="text" name="branch" placeholder="ENTER YOUR BRANCH" required><br><br>
        <input type="text" name="phoneNumber" placeholder="ENTER YOUR PHONE NUMBER" required><br><br>
        
        <label><b>Upload Your Photo:</b></label><br>
        <input type="file" name="myfile" required><br><br>
        
        <button type="submit" style="padding: 8px 15px; cursor: pointer;">Register & Upload</button>
    </form>

</body>
</html>