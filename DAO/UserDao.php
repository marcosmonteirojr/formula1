<?php

class UserDAO
{
    private $conexao;


    public function __construct()
    {
        $dsn = "mysql:host=localhost:3307;dbname=formula2";
        $this->conexao = new PDO($dsn, 'root', '1212');
    }

    public function insert(UserModel $user)
    {
        $sql = "INSERT INTO usuario (email, senha) VALUES (?, ?) ";
        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $user->email);
        $stmt->bindValue(2, $user->senha);
        $stmt->execute();
    }

/*
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
*/

    public function selectById(int $id)
    {
        include_once 'Model/UserModel.php';

        $sql = "SELECT * FROM user WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("User"); // Retornando um objeto específico
    }


    public function delete(int $id)
    {
        $sql = "DELETE FROM user WHERE id = ? ";

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