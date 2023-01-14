<?php

declare(strict_types=1);

use Infrastructure\Controllers\ReadProductController;

require_once("/xampp/htdocs/php-crud-products/src/view/layouts/header.php");
require_once("/xampp/htdocs/php-crud-products/src/Infrastructure/Controllers/ReadProductController.php");

$controller = new ReadProductController();
$dataOfProductById = $controller->readProductById();
?>

<h2 class="text-center">PRODUCT DETAILS</h2>
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
        <tr>
            <td scope="row"><?= $dataOfProductById->getId() ?></td>
            <td><?= $dataOfProductById->getName() ?></td>
            <td><?= $dataOfProductById->getPrice() ?></td>
            <td><?= ($dataOfProductById->getActive()) ? "ACTIVE" : "DISABLED" ?></td>
            <td>
                <a class="btn btn-primary" href="index.php">HOME</a>
                <a class="btn btn-success" href="edit.php?id=<?= $dataOfProductById->getId() ?>">UPDATE</a>
                <!-- Button trigger modal -->
                <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">DELETE</a>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Do you want to delete the product?</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Once the product is deleted, it cannot be recovered
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success" data-bs-dismiss="modal">CLOSE</button>
                                <a class="btn btn-danger" href="delete.php?id=<?= $dataOfProductById->getId() ?>">DELETE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
    </tbody>
</table>

<?php
require_once("/xampp/htdocs/php-crud-products/src/view/layouts/footer.php");
?>