<?php 
    session_start();
    session_unset();
    session_destroy();

    setcookie('num_products', 0, time() -3600);

    header("Location: index.php");
    exit();

?>