<?php

declare(strict_types=1);

use Infrastructure\Controllers\ReadProductController;

require_once("/xampp/htdocs/php-crud-products/src/view/layouts/header.php");
require_once("/xampp/htdocs/php-crud-products/src/Infrastructure/Controllers/ReadProductController.php");

$controller = new ReadProductController();
$dataOfProductById = $controller->readProductById();
?>

<form action="update.php" method="post" autocomplete="off">
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-1 col-form-label">ID</label>
        <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" id="staticEmail" name="id" value="<?= $dataOfProductById->getId() ?>">
        </div>
    </div>
    <div class="mb-3">
        <label for="input-name" class="form-label">Name Product</label>
        <input type="text" class="form-control" id="name-product" name="name" aria-describedby="name-help" value="<?= $dataOfProductById->getName() ?>">
    </div>
    <div class="mb-3">
        <label for="input-price" class="form-label">Price</label>
        <input type="text" class="form-control" id="product-price" name="price" aria-describedby="price-help" value="<?= $dataOfProductById->getPrice() ?>">
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" name="active" id="active" value="<?= $dataOfProductById->getActive() ?>">
        <label class="form-check-label" for="check-active">Active Product / Disable Product</label>
    </div>
    <hr>
    <!-- <a class="btn btn-success" href="./update.php?id=<?= $id ?>">UPDATE</a> -->
    <input type="submit" class="btn btn-primary" value="Update Product">
    <a class="btn btn-danger" href="show.php?id=<?= $id ?>">Cancel</a>
</form>

<?php
require_once("/xampp/htdocs/php-crud-products/src/view/layouts/footer.php");
?>