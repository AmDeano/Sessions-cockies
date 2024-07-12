<?php 
    session_start();

    if(isset($_GET['cookies'])){
        $cookies = $_GET['cookies'];
        $_SESSION['cookies'] = $cookies;
        $Product = $_SESSION['Products'][$cookies];
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Products</title>
</head>
<body>
    <h2>Update Product</h2>
    <form action="update_v.php" method="POST">
        <label for="Lib">Libelle</label>
        <input type="text" name="Lib" value=
        "<?php echo $Product['Lib']; ?>">

        <label for="Lib">PU</label>
        <input type="number" name="pu" value=
        "<?php echo $Product['pu']; ?>">

        <input type="hidden" name="cookies" value=
        "<?php echo $cookies; ?>">
        <input type="submit" value="Update">

    </form>
    
</body>
</html>