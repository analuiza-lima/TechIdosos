<?php
require_once __DIR__ . '/../model/NoticiasModel.php';

class NoticiasController {

    // 🔹 Lista todas as notícias
    public function listar() {
        $model = new NoticiasModel();
        $noticias = $model->getAll();

        require_once __DIR__ . '/../view/noticiasView.php';
    }

    // 🔹 Abre formulário vazio (novo cadastro)
    public function novo() {
        $dados = [
            'id' => '',
            'titulo' => '',
            'conteudo' => '',
            'explicacao' => '',
            'status' => ''
        ];

        require_once __DIR__ . '/../view/formularioNoticia.php';
    }

    
    public function gravar() {
    $model = new NoticiasModel();

    if (empty($_POST['titulo']) || empty($_POST['conteudo']) || empty($_POST['status'])) {
        die("Preencha os campos obrigatórios");
    }

    if (empty($_POST['id'])) {
        $model->insert($_POST);
    } else {
        $model->update($_POST);
    }

    header("Location: " . APP . "/noticias/listar");
    exit;
}

   
    public function editar($id) {
        $model = new NoticiasModel();
        $dados = $model->getById($id);

        require_once __DIR__ . '/../view/formularioNoticia.php';
    }

    // 🔹 Excluir notícia
    public function excluir($id) {
        $model = new NoticiasModel();
        $model->delete($id);

        header("Location: " . APP . "/noticias/listar");
        exit;
    }
}