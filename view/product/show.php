<?php
require_once "C:/xampp/htdocs/php-crud-products/view/head/head.php";
require_once("C:/xampp/htdocs/php-crud-products/controller/productController.php");
$obj = new productController();
$id = $_GET["id"];
$data = $obj->show($id);
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
            <td scope="row"><?= $data["id"] ?></td>
            <td><?= $data["name"] ?></td>
            <td><?= $data["price"] ?></td>
            <td><?= ($data["active"]) ? "ACTIVE" : "DISABLED" ?></td>
            <td>
                <a class="btn btn-primary" href="index.php">HOME</a>
                <a class="btn btn-success" href="edit.php?id=<?= $data["id"] ?>">UPDATE</a>
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
                                <a class="btn btn-danger" href="delete.php?id=<?= $data["id"] ?>">DELETE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
    </tbody>
</table>

<?php
require_once "C:/xampp/htdocs/php-crud-products/view/head/footer.php";
?>