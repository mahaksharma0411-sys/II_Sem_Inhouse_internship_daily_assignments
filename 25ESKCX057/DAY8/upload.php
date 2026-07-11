<?php

$folder = "uploads/";

if (!is_dir($folder)) {
    mkdir($folder, 0777, true);
}

if (isset($_FILES["myfile"])) {
    $allowedTypes = ["jpg", "jpeg", "png", "gif", "pdf"];

    //pathinfo(file["name"])
    $extension = strtolower(pathinfo($_FILES["myfile"]["name"],
     PATHINFO_EXTENSION));


$maxSize = 20* 1024 * 1024;

if(!in_array($extension, $allowedTypes)) {
    die("Only JPG, JPEG, PNG, GIF and WEBP images are allowed.");
}

if ($_FILES["myfile"]["size"] > $maxSize) {
    die ('Image size must not exceed 20 MB.');
}

$newName = time() . "_" . rand(1000,9999) . "." . $extension;

$targetFile = $folder . $newName;

if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetFile)) {
    echo "Image uploaded successfully. ";
    echo "<br><img src='$targetFile' width='200'>";
 } else{
    echo "upload failed.";
 }


}