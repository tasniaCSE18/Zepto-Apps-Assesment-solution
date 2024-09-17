<?php
function uploadFont($file) {
    $allowed_extension = 'ttf';
    $file_extension = pathinfo($file['name'], PATHINFO_EXTENSION);

    if ($file_extension !== $allowed_extension) {
        return "Only TTF fonts are allowed.";
    }

    $upload_dir = "../uploads/fonts/";
    $upload_path = $upload_dir . basename($file['name']);

    if (move_uploaded_file($file['tmp_name'], $upload_path)) {
        return "Font uploaded successfully.";
    } else {
        return "Font upload failed.";
    }
}
?>
