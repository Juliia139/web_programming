<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $text = $_POST['text'];
    file_put_contents('file.txt', $text . PHP_EOL, FILE_APPEND);
}

echo '<form method="post">';
echo '<textarea name="text"></textarea>';
echo '<input type="submit" value="Submit">';
echo '</form>';

$file_content = file_get_contents('file.txt');
echo nl2br($file_content);

$lines = explode(PHP_EOL, $file_content);
foreach ($lines as $line) {
    echo "<p>$line</p>";
}
?>