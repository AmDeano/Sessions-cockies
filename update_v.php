<?php 
    session_start();
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_SESSION['cookies'])){
        $cookies = $_SESSION['cookies'];

        $Libelle = $_POST['Lib'];
        $PU = $_POST['pu'];

        $Product = [
            'Lib' => $Libelle,'pu' => $PU
        ];

        $_SESSION['Products'][$cookies] = $Product;
        header("Location: list.php");
    }
}

?>