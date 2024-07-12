<?php 
    
    session_start();

    if($_SERVER ["REQUEST_METHOD"] == "POST"){

        $Libelle = $_POST['Lib'];
        $PU = $_POST['pu'];

    $Product = [
        'Lib' => $Libelle,'pu' => $PU
    ];
    $_SESSION ['Products'][]= $Product;

    $num_products = count($_SESSION ['Products']);
    setcookie('num_products',$num_products, time() + (86400 * 30), "/");    
}
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">

    <label for="">Libelle : </label>
    <input type="text" name="Lib">

    <label for="">Prix Unitaire : </label>
    <input type="number" name="pu">

    <input type="Submit" value="Add">

    </form>
    <button><a href="list.php">Liste</a></button>
</body>
</html>
