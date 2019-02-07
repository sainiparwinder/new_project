<?php
    $filePath= "uploads/test.txt";
    if(file_exists($filePath)) {
		header('Content-Description: File Transfer');
		header('Content-Type: application/octet-stream');
		header('Content-disposition:attachment; filename= "'.basename($filePath).'"');
		header('Expires:0');
		header('Cache-Control:must-revalidated');
		header('Progma:Public');
		header('Content-Length:'.filesize($filePath));
		flush();
		readfile($filePath);
		exit;
		}
?>
