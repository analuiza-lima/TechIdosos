<?php
class NoticiasModel {
    
    private function getConnection() {
        
        
        return new PDO('pgsql:host=localhost;port=5432;dbname=techidosos', 'postgres', 'postgres');
    }

    public function getAll() {
        $conexao = $this->getConnection();
        $sentenca = $conexao->query('SELECT * FROM noticias ORDER BY titulo', PDO::FETCH_ASSOC);
        return $sentenca->fetchAll();
    }

    public function getById($id) {
        $conexao = $this->getConnection();
        $sentenca = $conexao->prepare('SELECT * FROM noticias WHERE id = :id');
        $sentenca->bindParam(":id", $id);
        $sentenca->execute();
        return $sentenca->fetch(PDO::FETCH_ASSOC);
    }

    public function insert($dados) {
        $conexao = $this->getConnection();
        $sql = 'INSERT INTO noticias (titulo, conteudo, explicacao, status) VALUES (:titulo, :conteudo, :explicacao, :status)';
        $sentenca = $conexao->prepare($sql);
        return $sentenca->execute([
            ":titulo"    => $dados['titulo'],
            ":conteudo" => $dados['conteudo'],
            ":explicacao"      => $dados['explicacao'],
            ":status"=> $dados['status']
        ]);
    }

    
    public function update($dados) {
    $conexao = $this->getConnection();
    $sql = 'UPDATE noticias 
            SET titulo = :titulo, 
                conteudo = :conteudo, 
                explicacao = :explicacao, 
                status = :status 
            WHERE id = :id';

    $sentenca = $conexao->prepare($sql);

    return $sentenca->execute([
        ":titulo" => $dados['titulo'],
        ":conteudo" => $dados['conteudo'],
        ":explicacao" => $dados['explicacao'],
        ":status" => $dados['status'],
        ":id" => $dados['id']
    ]);
}

    
    public function delete($id) {
        $conexao = $this->getConnection();
        $sentenca = $conexao->prepare('DELETE FROM noticias WHERE id = :id');
        $sentenca->bindParam(":id", $id);
        return $sentenca->execute();
    }
}