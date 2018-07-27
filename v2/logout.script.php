<?php
    session_start();
    session_unset();
    session_destroy();

    header('Location:/ds/v2/index.html');
    exit;
    
?>