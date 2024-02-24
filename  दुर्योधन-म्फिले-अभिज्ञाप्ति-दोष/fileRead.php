<?php
if (file_exists('/root/war-plan-flag.txt')) {
    readfile('/root/war-plan-flag.txt');
} else {
    echo "File not found.";
}
?>
