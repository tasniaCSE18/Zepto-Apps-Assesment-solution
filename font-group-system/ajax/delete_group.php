<?php
include("../includes/db_connect.php");

if ($_GET['id']) {
    $id = $_GET['id'];

    $stmt = $conn->prepare("DELETE FROM font_groups WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "Font group deleted successfully.";
    } else {
        echo "Error deleting group.";
    }

    $stmt->close();
}
?>
