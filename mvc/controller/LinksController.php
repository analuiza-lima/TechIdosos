<?php
require_once 'model/LinksModel.php';

class LinksController {

    public function listar() {
        $model = new LinksModel();
        $dados = $model->getAll();
        require 'view/Links.php';
    }

    public function novo() {
        require 'view/formularioLinks.php';
    }

    public function salvar() {
        $model = new LinksModel();
        $model->insert($_POST);
        header("Location: " . APP . "/links/listar");
    }

    public function editar($id) {
        $model = new LinksModel();
        $link = $model->getById($id);
        require 'view/formularioLinks.php';
    }

    public function atualizar() {
        $model = new LinksModel();
        $model->update($_POST);
        header("Location: " . APP . "/links/listar");
    }

    public function excluir($id) {
        $model = new LinksModel();
        $model->delete($id);
        header("Location: " . APP . "/links/listar");
    }
}