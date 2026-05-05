<?php


class LicaoController {


    private $model;


    public function __construct() {
        $this->model = new LicaoModel();
    }


    // LISTA
    public function listar() { 
        $dados = $this->model->getAll(); 
        $licao = array();
        $licao['id'] = 0;
        $licao['nome'] = '';
        $licao['xp'] = 0;
        $licao['nivel'] = 0;

        
        include 'view/licaoView.php'; 
    }

    
    public function novo() {
        $dados = ['id'=>'', 'nome'=>'', 'nivel'=>'', 'xp'=>''];
        require '../app/view/licaoView/form.php';
    }

    // SALVAR
    public function gravar() {
        
        
        if (empty($_POST['id'])) {
            $this->model->insert($_POST);
        } else {
            $this->model->update($_POST);
        }

        //$this->model->salvar($_POST);
        header("Location: " . APP . "/licao/listar");
    }

  public function editar($id) {
    $dados = $this->model->getAll(); 

    $licao = $this->model->getById($id); 
    include 'view/licaoView.php'; 
}
    public function excluir($id) {
    $this->model->delete($id); 
    
    
    header("Location: " . APP . "/licao/listar"); 
    exit; 
}

    // AJUDA
    public function ajuda() {
        require '../app/view/licaoView/ajuda.php';
    }




}
