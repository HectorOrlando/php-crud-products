<?php

declare(strict_types=1);

use Infrastructure\Controllers\ProductController;

require_once("/xampp/htdocs/php-crud-products/src/view/layouts/header.php");
require_once("/xampp/htdocs/php-crud-products/src/Infrastructure/Controllers/ProductController.php");

$controller = new ProductController();
$dataOfAllProducts = $controller->readAllProducts();
?>

<div class="mb-3">
    <a class="btn btn-primary" href="./create.php">ADD NEW PRODUCT</a>
</div>

<h2 class="text-center">PRODUCTS DETAILS</h2>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NAME</th>
            <th scope="col">PRICE</th>
            <th scope="col">STATUS</th>
            <th scope="col">ACTIONS</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($dataOfAllProducts) : ?>
            <?php foreach ($dataOfAllProducts as $product) { ?>
                <tr>
                    <td scope="row"><?= $product->getId() ?></td>
                    <td><?= $product->getName() ?></td>
                    <td><?= $product->getPrice() ?></td>
                    <td><?= $product->getActive() ?></td>
                    <td>
                        <a class="btn btn-success" href="./show.php?id=<?= $product->getId() ?>">UPDATE</a>
                        <a class="btn btn-danger" href="./delete.php?id=<?= $product->getId() ?>">DELETE</a>
                    </td>
                </tr>
            <?php } ?>
        <?php else : ?>
            <tr>
                <td colspan="5" class="text-center text-danger"><strong>
                        <h2>NO PRODUCTS</h2>
                    </strong></td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

<?php
require_once("/xampp/htdocs/php-crud-products/src/view/layouts/footer.php");
?>