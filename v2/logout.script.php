<?php
    session_start();

    session_destroy();

    header('Location:/ds/v2/index.html');
    exit;
    
?>