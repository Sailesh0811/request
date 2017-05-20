<?php
 header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename='.basename('dotapk.pdf'));
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize('dotapk.pdf'));
    readfile('dotapk.pdf');
    exit;

?>