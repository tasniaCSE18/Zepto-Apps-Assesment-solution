<?php
include("../includes/db_connect.php");

if ($_POST['id'] && count($_POST['font']) >= 2) {
    $id = $_POST['id'];
    $fonts = implode(', ', $_POST['font']);

    $stmt = $conn->prepare("UPDATE font_groups SET fonts = ? WHERE id = ?");
    $stmt->bind_param("si", $fonts, $id);

    if ($stmt->execute()) {
        echo "Font group updated successfully.";
    } else {
        echo "Error updating group.";
    }

    $stmt->close();
}
?>
