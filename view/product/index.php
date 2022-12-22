<?php
require_once("C:/xampp/htdocs/php-crud-products/view/head/head.php");
require_once("C:/xampp/htdocs/php-crud-products/controller/productController.php");
$obj = new productController();
$dataObj = $obj->index();
?>

<div class="mb-3">
    <a class="btn btn-primary" href="../product/create.php">ADD NEW PRODUCT</a>
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
        <?php if ($dataObj) : ?>
            <?php foreach ($dataObj  as $data) { ?>
                <tr>
                    <td scope="row"><?= $data["id"] ?></td>
                    <td><?= $data["name"] ?></td>
                    <td><?= $data["price"] ?></td>
                    <td><?= ($data["active"]) ? "ACTIVE" : "DISABLED" ?></td>
                    <td>
                        <a class="btn btn-success" href="show.php?id=<?= $data["id"] ?>">UPDATE</a>
                        <a class="btn btn-danger" href="delete.php?id=<?= $data["id"] ?>">DELETE</a>
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
require_once("C:/xampp/htdocs/php-crud-products/view/head/footer.php");
?>