<?php
$mysqli = new mysqli('localhost', 'root', '', 'books');

if ($mysqli->connect_error) {
    die('Error: (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

$results = $mysqli->query("SELECT id, book_code, book_author, book_name, book_desc FROM books");

print '<table border="1">';

while ($row = $results->fetch_object()) {
    print '<tr>';
    print '<td>' . $row->id . '</td>';
    print '<td>' . $row->book_code . '</td>';
    print '<td>' . $row->book_author . '</td>';
    print '<td>' . $row->book_name . '</td>';
    print '<td>' . $row->book_desc . '</td>';
    print '</tr>';
}

print '</table>';

$mysqli->close();
?>