<?php
class Idoso {
    
    private function getConnection() {

        return new PDO('pgsql:host=localhost;port=5432;dbname=techidosos', 'postgres', 'postgres');
    }

    public function getAll() {
        $conexao = $this->getConnection();
        $sentenca = $conexao->query('SELECT * FROM idoso ORDER BY nome', PDO::FETCH_ASSOC);
        return $sentenca->fetchAll();
    }

    public function getById($id) {
        $conexao = $this->getConnection();
        $sentenca = $conexao->prepare('SELECT * FROM idoso WHERE id = :id');
        $sentenca->bindParam(":id", $id);
        $sentenca->execute();
        return $sentenca->fetch(PDO::FETCH_ASSOC);
    }

    public function insert($dados) {
        $conexao = $this->getConnection();
        $sql = 'INSERT INTO idoso (nome, email, telefone, cpf) VALUES (:nome, :email, :telefone, :cpf)';
        $sentenca = $conexao->prepare($sql);
        return $sentenca->execute([
            ":nome"     => $dados['nome'],
            ":email"    => $dados['email'],
            ":telefone" => $dados['telefone'],
            ":cpf"      => $dados['cpf']
        ]);
    }

    
    public function update($dados) {
        $conexao = $this->getConnection();
        $sql = 'UPDATE idoso SET nome = :nome, email = :email, telefone = :telefone, cpf = :cpf WHERE id = :id';
        $sentenca = $conexao->prepare($sql);
        return $sentenca->execute([
            ":nome"     => $dados['nome'],
            ":email"    => $dados['email'],
            ":telefone" => $dados['telefone'],
            ":cpf"      => $dados['cpf'],
            ":id"       => $dados['id']
        ]);
    }

    
    public function delete($id) {
        $conexao = $this->getConnection();
        $sentenca = $conexao->prepare('DELETE FROM idoso WHERE id = :id');
        $sentenca->bindParam(":id", $id);
        return $sentenca->execute();
    }
}