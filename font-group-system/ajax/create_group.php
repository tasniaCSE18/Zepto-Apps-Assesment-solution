<?php
include("../includes/db_connect.php");

if (!empty($_POST['groupName']) && count($_POST['font']) >= 2) {
    $groupName = $_POST['groupName'];
    $fonts = implode(', ', $_POST['font']);

    $stmt = $conn->prepare("INSERT INTO font_groups (name, fonts) VALUES (?, ?)");
    $stmt->bind_param("ss", $groupName, $fonts);

    if ($stmt->execute()) {
        echo "Font group created successfully.";
    } else {
        echo "Error creating group.";
    }

    $stmt->close();
}
?>
