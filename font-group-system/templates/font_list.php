<?php
$dir = "uploads/fonts/";
$fonts = scandir($dir);

if ($fonts) {
    foreach ($fonts as $font) {
        if (pathinfo($font, PATHINFO_EXTENSION) == 'ttf') {
            echo "<div class='font-item'>";
            echo "<span>$font</span>";
            echo "<span style='font-family:url($dir/$font);'>Example Style</span>";
            echo "</div>";
        }
    }
}
?>
