<?php
require_once("C:/xampp/htdocs/php-crud-products/view/head/head.php");
require_once("C:/xampp/htdocs/php-crud-products/controller/productController.php");
$obj = new productController();
$id = $_GET["id"];
$obj->delete($id);
?>

<?php
require_once("C:/xampp/htdocs/php-crud-products/view/head/footer.php");
?>