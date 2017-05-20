<?php
    

    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename='.basename('md5.txt'));
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize('md5.txt'));
    readfile('md5.txt');
    exit;
?>