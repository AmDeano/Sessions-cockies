
<?php 
    session_start();
    $num_products = isset($_COOKIE['num_products']) ? $_COOKIE['num_products'] : 0;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>list</title>
</head>
<body>
    <h2>List of Products(<?php echo $num_products; ?>)</h2>
    <table border ="1">
        <tr>
            <th>Libel</th>
            <th>Unity Price</th>
            <th>Action</th>
        </tr>
<?php 

 if(isset($_SESSION['Products'])){
    
    foreach ($_SESSION['Products'] as $Product){
        echo "<tr>";
        echo "<td>".$Product['Lib']."</td>";
        echo "<td>".$Product['pu']."</td>";
        echo "<td><a href='update.php?index=".array_search($Product,
        $_SESSION['Products'])."'>Update</a> | 
        <a href='delete.php?cookies=".array_search($Product,
        $_SESSION['Products'])."'>Delete</a></td>";
        echo "</tr>";
    }
}
?>
    </table>
    <a href="clear.php"></a>
</body>
</html>