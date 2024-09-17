<?php
include("../includes/db_connect.php");

$result = $conn->query("SELECT * FROM font_groups");

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div>";
        echo "<p><b>Group Name:</b> " . $row['name'] . "</p>";
        echo "<p><b>Fonts:</b> " . $row['fonts'] . "</p>";
        echo "<a href='edit_group.php?id=" . $row['id'] . "'>Edit</a> | ";
        echo "<a href='delete_group.php?id=" . $row['id'] . "'>Delete</a>";
        echo "</div>";
    }
} else {
    echo "No groups found.";
}
?>
