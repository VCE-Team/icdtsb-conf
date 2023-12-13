<?php
$file = './assets/documents/CALL FOR PAPERS final.pdf';

// Check if the file exists
if (file_exists($file)) {
    // Set the Content-Type header to application/pdf
    header('Content-Type: application/pdf');

    // Read and output the file content
    readfile($file);
} else {
    // Handle the case when the file does not exist
    echo 'File not found: ' . $file;
}
?>
