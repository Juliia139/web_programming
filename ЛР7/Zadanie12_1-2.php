<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $file = $_FILES['file'];
    $file_name = $file['name'];
    $file_tmp_name = $file['tmp_name'];
    $file_destination = 'texts/' . $file_name;
    move_uploaded_file($file_tmp_name, $file_destination);
}

echo '<form method="post" enctype="multipart/form-data">';
echo '<input type="file" name="file">';
echo '<input type="submit" value="Upload">';
echo '</form>';
?>