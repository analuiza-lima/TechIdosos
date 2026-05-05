<?php
class IdososController {
    
    // Lista todos os idosos do banco
    public function listar() {
        $model = new Idoso();
        $idosos = $model->getAll(); // Busca do banco real

        require_once __DIR__ . '/../view/listagemIdoso.php';
    }

    // Abre o formulário vazio para novo cadastro
    public function novo() {
        $dados = ['id' => '', 'nome' => '', 'email' => '', 'telefone' => '', 'cpf' => ''];
        require_once __DIR__ . '/../view/formularioIdoso.php';
    }

    // Salva os dados no banco
    public function gravar() {
        $model = new Idoso();
        
        if (empty($_POST['id'])) {
            $model->insert($_POST);
        } else {
            $model->update($_POST);
        }

        // Após gravar, redireciona para a lista
        header("Location: " . APP . "/idosos/listar");
    }

    public function editar($id) {
        $model = new Idoso();
        $dados = $model->getById($id);
        require_once __DIR__ . '/../view/formularioIdoso.php';
    }

    public function excluir($id) {
        // 1. Instancia o Model
        $model = new Idoso();
        
        // 2. Chama a função de deletar que criamos no Model
        $model->delete($id);
        
        // 3. Redireciona de volta para a lista para atualizar a tela
        header("Location: " . APP . "/idosos/listar");
        exit;
    }
}