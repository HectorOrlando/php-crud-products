<?php
require_once("/xampp/htdocs/php-crud-products/src/view/layouts/header.php");
require_once("/xampp/htdocs/php-crud-products/src/Infrastructure/Controllers/CreateProductController.php");
?>

<form action="store.php" method="POST" autocomplete="off">
    <legend>CREATE PRODUCT</legend>
    <div class="mb-3">
        <label for="input-name" class="form-label">Name Product</label>
        <input type="name" class="form-control" name="name" id="name-product" aria-describedby="name-help">
    </div>
    <div class="mb-3">
        <label for="input-price" class="form-label">Price</label>
        <input type="text" class="form-control" name="price" id="product-price" aria-describedby="price-help">
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" name="active" id="active">
        <label class="form-check-label" for="check-active">Active Product / Disable Product</label>
    </div>
    <button type="submit" class="btn btn-primary">Save Product</button>
    <a class="btn btn-danger" href="/../php-crud-products/index.php">Cancel</a>
</form>

<?php
require_once("/xampp/htdocs/php-crud-products/src/view/layouts/footer.php");
?>