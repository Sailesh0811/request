<?php
 header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename='.basename('spiderweb.pdf'));
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize('spiderweb.pdf'));
    readfile('spiderweb.pdf');
    exit;

?>