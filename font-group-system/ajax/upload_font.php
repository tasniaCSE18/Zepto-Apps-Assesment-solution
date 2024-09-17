<?php
include("../includes/functions.php");

if ($_FILES['file']) {
    
    if ($_FILES['file']['error'] > 0) {
        echo "Error: " . $_FILES['file']['error'] . "<br>";
        exit;
    }

    $file_type = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
    if (strtolower($file_type) !== 'ttf') {
        echo "Only TTF files are allowed.";
        exit;
    }

    $upload_dir = "../uploads/fonts/";
    if (!is_dir($upload_dir)) {
        echo "Upload directory does not exist.";
        exit;
    }
    if (!is_writable($upload_dir)) {
        echo "Upload directory is not writable.";
        exit;
    }

    $upload_path = $upload_dir . basename($_FILES['file']['name']);

    if (move_uploaded_file($_FILES['file']['tmp_name'], $upload_path)) {
        echo "Font uploaded successfully.";
    } else {
        echo "Failed to move the uploaded file.";
    }
} else {
    echo "No file was uploaded.";
}
?>
