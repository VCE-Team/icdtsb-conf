<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$file = './assets/documents/CONFERENCE BROCHURE final.pdf';

// Check if the file exists
if (file_exists($file)) {
    // Set the Content-Disposition header to inline
    header('Content-Disposition: inline; filename="your-desired-filename.pdf"');
    
    // Set the Content-Type header to application/pdf
    header('Content-Type: application/pdf');

    // Read and output the file content
    readfile($file);
} else {
    // Handle the case when the file does not exist
    echo 'File not found: ' . $file;
}
?>
