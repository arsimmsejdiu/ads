  
<?php

require_once('db/db_connect.php');

$product_id = $_GET['product_id'];

$sql_query = "DELETE FROM products WHERE product_id='$product_id'";
$var_temp = $db->prepare($sql_query);
$var_temp->execute();

header('Location:MySpace.php');
?>