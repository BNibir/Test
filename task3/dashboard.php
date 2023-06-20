<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $targetDirectory = "uploads/";
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    $allowedFormats = ["jpg", "jpeg", "png"];


    $maxFileSize = 4 * 1024 * 1024;

    if (!in_array($imageFileType, $allowedFormats)) {
        echo "Only JPEG, JPG, and PNG files are allowed.";
    } 

    elseif ($_FILES["picture"]["size"] > $maxFileSize) {
        echo "File size should not exceed 4MB.";
    } 

    else {
        if (move_uploaded_file($_FILES["picture"]["tmp_name"], "\Upload")) {
            echo "Profile picture uploaded successfully.";
        } else {
            echo "Error uploading the picture.";
        }
    }
}
?>
