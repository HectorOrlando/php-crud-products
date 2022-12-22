<?php
require_once("C:/xampp/htdocs/php-crud-products/view/head/head.php");
require_once("C:/xampp/htdocs/php-crud-products/controller/productController.php");
$obj = new productController();
$id = $_POST["id"];
$name =  $_POST["name"];
$price =  $_POST["price"];
$active = isset($_POST["active"]) ? 1 : 0;
$obj->update($id, $name, $price, $active);
?>

<?php
require_once("C:/xampp/htdocs/php-crud-products/view/head/footer.php");
?>