<?php
function read_file($filename) {
    $file = "texts/" . $filename;
    if (file_exists($file)) {
        $content = file_get_contents($file);
        echo $content;
    } else {
        echo "File not found!";
    }
}
read_file("file.txt");
?>