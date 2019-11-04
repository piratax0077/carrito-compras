<?php

require_once 'models/categoria.php';

class categoriaController {

    public function index() {
        $categoria = new Categoria();
        $categorias = $categoria->getAll();

        require_once 'views/categorias/index.php';
    }

    public function crear() {
        Utils::isAdmin();
        require_once 'views/categorias/crear.php';
    }

    public function save() {
        Utils::isAdmin();

        //Guardar la categoría en la base de datos

        if (isset($_POST)&& isset($_POST['nombre'])) {
            $nombre_categoria = isset($_POST['nombre']) ? $_POST['nombre'] : false;

            if ($nombre_categoria) {

                $categoria = new Categoria();

                $categoria->setNombre($nombre_categoria);
                $save = $categoria->save();
                
            } else {
                $_SESSION['register'] = 'failed';
            }

            if ($save) {
                $_SESSION['register'] = 'completed';
            } else {
                $_SESSION['register'] = 'failed';
            }
        }else {
            $_SESSION['register'] = 'failed';
        }
        header("Location:" . base_url . "categoria/index");
    }

}
