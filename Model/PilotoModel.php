<?php

class PilotoModel
{
    public $id;
    public $nome;
    public $sobrenome;
    public $equipe;
    public $rows;

    public function save()
    {
        include 'DAO/PilotoDao.php'; 
       
        $dao = new PilotoDao();

        
        if (empty($this->id)) {
            $dao->insert($this);
        } else {

            $dao->update($this); 
        }
    }

    public function getAllRows()
    {
        include 'DAO/PilotoDao.php'; 
        
        $dao = new PilotoDAO;

        $this->rows = $dao->select();
    }

    public function getById(int $id)
    {
        include 'DAO/PilotoDao.php'; 
        $dao = new PilotoDAO();

        $obj = $dao->selectById($id); 

        return ($obj) ? $obj : new PilotoModel(); 

        /*if($obj)
        {
            return  $obj;
        } else {
            return new PessoaModel();
        }*/
    }
    public function delete(int $id)
    {
        include 'DAO/PilotoDao.php'; 

        $dao = new PilotoDAO();

        $dao->delete($id);
    }
}
