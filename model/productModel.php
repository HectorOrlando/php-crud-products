<?php
class productModel
{
    private $PDO;
    public function __construct()
    {
        require_once "C:/xampp/htdocs/php-crud-products/config/db.php";
        $con = new db();
        $this->PDO = $con->connection();
    }

    public function insert($name, $price, $active)
    {
        $sql = "INSERT INTO product VALUES(null, :name, :price, :active)";
        $stament = $this->PDO->prepare($sql);
        $stament->bindParam(":name", $name);
        $stament->bindParam(":price", $price);
        $stament->bindParam(":active", $active);
        return ($stament->execute()) ? $this->PDO->lastInsertId() : false;
    }

    public function show($id)
    {
        $sql = "SELECT * FROM product WHERE id = :id LIMIT 1";
        $stament = $this->PDO->prepare($sql);
        $stament->bindParam(":id", $id);
        return ($stament->execute()) ? $stament->fetch() : false;
    }

    public function index()
    {
        $sql = "SELECT * FROM product";
        $stament = $this->PDO->prepare($sql);
        return ($stament->execute()) ? $stament->fetchAll() : false;
    }

    public function update($id, $name, $price, $active)
    {
        $sql =  "UPDATE product SET name=:name, price=:price, active=:active WHERE id=:id";
        $stament = $this->PDO->prepare($sql);
        $stament->bindParam(":name", $name);
        $stament->bindParam(":price", $price);
        $stament->bindParam(":active", $active);
        $stament->bindParam(":id", $id);
        return ($stament->execute()) ? $id : false;
    }

    public function delete($id)
    {
        $sql = "DELETE FROM product WHERE id=:id";
        $stament = $this->PDO->prepare($sql);
        $stament->bindParam(":id", $id);
        return ($stament->execute()) ? true : false;
    }
}
