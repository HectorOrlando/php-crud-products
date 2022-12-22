<?php
require_once("C:/xampp/htdocs/php-crud-products/view/head/head.php");
require_once("C:/xampp/htdocs/php-crud-products/controller/productController.php");
$obj = new productController();
$user = $obj->show($_GET["id"]);
?>

<form action="update.php" method="post" autocomplete="off">
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-1 col-form-label">ID</label>
        <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" id="staticEmail" name="id" value="<?= $user['id'] ?>">
        </div>
    </div>
    <div class="mb-3">
        <label for="input-name" class="form-label">Name Product</label>
        <input type="text" class="form-control" id="name-product" name="name" aria-describedby="name-help" value="<?= $user['name'] ?>">
    </div>
    <div class="mb-3">
        <label for="input-price" class="form-label">Price</label>
        <input type="text" class="form-control" id="product-price" name="price" aria-describedby="price-help" value="<?= $user['price'] ?>">
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" name="active" id="active" value="<?= $user['active'] ?>">
        <label class="form-check-label" for="check-active">Active Product / Disable Product</label>
    </div>
    <input type="submit" class="btn btn-primary" value="Update Product">
    <a class="btn btn-danger" href="show.php?id=<?= $user['id'] ?>">Cancel</a>
</form>

<?php
require_once("C:/xampp/htdocs/php-crud-products/view/head/footer.php");
?>