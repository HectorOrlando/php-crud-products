<?php
class productController
{
    private $model;
    public function __construct()
    {
        require_once("C:/xampp/htdocs/php-crud-products/model/productModel.php");
        $this->model = new productModel();
    }

    public function save($name, $price, $active)
    {
        $id = $this->model->insert($name, $price, $active);
        return ($id != false) ? header("Location:show.php?id=" . $id) : header("Location:create.php");
    }

    public function show($id)
    {
        return ($this->model->show($id) != false) ? $this->model->show($id) : header("Location:index.php");
    }

    public function index()
    {
        return ($this->model->index()) ? $this->model->index() : false;
    }

    public function update($id, $name, $price, $active)
    {
        return ($this->model->update($id, $name, $price, $active) != false) ? header("Location:show.php?id=$id") : header("Location:index.php");
    }

    public function delete($id)
    {
        return ($this->model->delete($id)) ? header("Location:index.php") : header("Location:show.php?id=$id");
    }
}
