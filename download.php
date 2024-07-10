<?php
// File path
$file = $_GET['file'];

// Check if the file exists
if (file_exists($file)) {
    // Set headers
    header('Content-Description: File Transfer');
    header('Content-Type: application/pdf'); // Change content type if needed
    header('Content-Disposition: attachment; filename=' . basename($file));
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
} else {
    // File not found
    die('The file does not exist.');
}
?>