<?php

require_once 'models/productoModels.php';

class productoController{
    public function index(){
        $producto = new Producto();
        $productos = $producto->getAll(6);

        //var_dump($productos->fetch_object());
//        var_dump($productos->num_rows);
        //die();

        require_once 'views/producto/destacados.php';
    }
}

