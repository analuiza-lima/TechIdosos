<?php
class LinksModel {

    private function getConnection() {
        try {
            return new PDO('pgsql:host=localhost;port=5432;dbname=techidosos', 'postgres', 'postgres');
        } catch (PDOException $e) {
            die("Erro: " . $e->getMessage());
        }
    }

    public function getAll() {
        $con = $this->getConnection();
        $sql = "SELECT * FROM links ORDER BY id DESC";
        return $con->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $con = $this->getConnection();
        $sql = "SELECT * FROM links WHERE id = :id";
        $stm = $con->prepare($sql);
        $stm->bindParam(":id", $id);
        $stm->execute();
        return $stm->fetch(PDO::FETCH_ASSOC);
    }

    public function insert($dados) {
        $con = $this->getConnection();
        $sql = "INSERT INTO links (link, veracidade, data) VALUES (:link, :veracidade, :data)";
        $stm = $con->prepare($sql);
        return $stm->execute([
            ":link" => $dados['link'],
            ":veracidade" => $dados['veracidade'],
            ":data" => $dados['data']
        ]);
    }

    public function update($dados) {
        $con = $this->getConnection();
        $sql = "UPDATE links SET link = :link, veracidade = :veracidade, data = :data WHERE id = :id";
        $stm = $con->prepare($sql);
        return $stm->execute([
            ":link" => $dados['link'],
            ":veracidade" => $dados['veracidade'],
            ":data" => $dados['data'],
            ":id" => $dados['id']
        ]);
    }

    public function delete($id) {
        $con = $this->getConnection();
        $sql = "DELETE FROM links WHERE id = :id";
        $stm = $con->prepare($sql);
        $stm->bindParam(":id", $id);
        return $stm->execute();
    }
}