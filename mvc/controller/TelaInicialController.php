<?php

class TelainicialController {

    public function index() {
        require_once 'view/telaInicial.php';
    }

    public function listar() {
        $this->index();
    }

}