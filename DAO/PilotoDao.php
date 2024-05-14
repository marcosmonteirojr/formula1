<?php

/**
 * As classes DAO (Data Access Object) são responsáveis por executar os
 * SQL junto ao banco de dados.
 */
class PilotoDAO
{
    private $conexao;


    public function __construct()
    {
        $dsn = "mysql:host=localhost:3307;dbname=formula2";
        $this->conexao = new PDO($dsn, 'root', '1212');
    }

    public function insert(PilotoModel $piloto)
    {
        $sql = "INSERT INTO piloto (nome, sobrenome, equipe) VALUES (?, ?, ?) ";
        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $piloto->nome);
        $stmt->bindValue(2, $piloto->sobrenome);
        $stmt->bindValue(3, $piloto->equipe);
        $stmt->execute();
    }


     public function update(PilotoModel $piloto)
    {
        $sql = "UPDATE piloto SET nome=?, sobrenome=?, equipe=? WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $piloto->nome);
        $stmt->bindValue(2, $piloto->sobrenome);
        $stmt->bindValue(3, $piloto->equipe);
        $stmt->bindValue(4, $piloto->id);
        $stmt->execute();
    }

    public function select()
    {
        $sql = "SELECT * FROM piloto ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);        
    }


    public function selectById(int $id)
    {
        include_once 'Model/PilotoModel.php';

        $sql = "SELECT * FROM piloto WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("PilotoModel"); // Retornando um objeto específico PessoaModel
    }


    public function delete(int $id)
    {
        $sql = "DELETE FROM piloto WHERE id = ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
    
}
/*
$x= new PilotoDao();
$tste=$x->select();
print_r($tste);
*/