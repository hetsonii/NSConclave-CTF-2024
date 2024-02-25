<?php
$root_directory = '/root';

if ($handle = opendir($root_directory)) {
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") {
            echo $entry . "\n";
        }
    }
    closedir($handle);
} else {
    echo "Insufficient permissions.";
}
?>
