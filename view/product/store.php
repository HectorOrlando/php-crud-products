<?php
    require_once "C:/xampp/htdocs/php-crud-products/controller/productController.php";
    $obj = new productController();
    $active = $_POST['active'] == 'on' ? 1 : 0;
    $obj->save($_POST['name'], $_POST['price'], $active);
