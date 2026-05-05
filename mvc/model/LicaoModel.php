<?php


class LicaoModel {


    private $db;

    // LISTAR
    public function getAll() {
        
        $sentenca = $this->db->query('SELECT * FROM licao', PDO::FETCH_ASSOC);
        return $sentenca->fetchAll();
    }


    // BUSCAR POR ID
    public function getById($id) {
        $sentenca = $this->db->prepare('SELECT * FROM licao WHERE id = :id');
        $sentenca->bindParam(":id", $id);
        $sentenca->execute();
        return $sentenca->fetch(PDO::FETCH_ASSOC);
    }


    public function insert($dados) {
        $sql = 'INSERT INTO licao (nome, nivel, xp)
                    VALUES (:nome, :nivel, :xp)';
        $sentenca = $this->db->prepare($sql);

        return $sentenca->execute([
            ":nome"     => $dados['nome'],
            ":nivel"    => $dados['nivel'],
            ":xp" => $dados['xp'],
        ]);
    }

    
    public function update($dados) {
        $sql = 'UPDATE licao
                    SET nome=:nome, nivel=:nivel, xp=:xp
                    WHERE id=:id';
        $sentenca = $this->db->prepare($sql);
        return $sentenca->execute([
            ":nome"     => $dados['nome'],
            ":nivel"    => $dados['nivel'],
            ":xp" => $dados['xp'],
            ":id"       => $dados['id']
        ]);
    }


    // SALVAR (INSERT ou UPDATE)
    public function salvar($dados) {


        if (empty($dados['id'])) {
            $sql = "INSERT INTO licao (nome, nivel, xp)
                    VALUES (?, ?, ?)";
            $this->db->query($sql, [
                $dados['nome'],
                $dados['nivel'],
                $dados['xp']
            ]);
        } else {
            $sql = "";
            $this->db->query($sql, [
                $dados['nome'],
                $dados['nivel'],
                $dados['xp'],
                $dados['id']
            ]);
        }
    }


    // EXCLUIR
    public function delete($id) {
        $sentenca = $this->db->prepare('DELETE FROM licao WHERE id = :id');
        $sentenca->bindParam(":id", $id);
        return $sentenca->execute();
    }

     public function __construct() { 
        $this->db = new PDO('pgsql:host=localhost;port=5432;dbname=techidosos', 'postgres', 'postgres');
    }
}

