<?php

class UserModel
{
    //public $id;
    public $email;
    public $senha;
    public $rows;

    public function save()
    {
        include 'DAO/UserDao.php';

        $dao = new UserDAO();
        $dao->insert($this);

       // if (empty($this->id)) {
         //   $dao->insert($this);
       // } //else {

        //$dao->update($this); 
        //}
    }
    /*
    public function getAllRows()
    {
        include 'DAO/PilotoDao.php'; 
        
        $dao = new PilotoDAO;

        $this->rows = $dao->select();
    }
*/
    public function getById(int $id)
    {
        include 'DAO/UserDao.php';
        $dao = new UserDAO();

        $obj = $dao->selectById($id);

        return ($obj) ? $obj : new UserModel();
    }

    /*if($obj)
        {
            return  $obj;
        } else {
            return new PessoaModel();
        }
    }
    public function delete(int $id)
    {
        include 'DAO/PilotoDao.php'; 

        $dao = new PilotoDAO();

        $dao->delete($id);
    }
    */
}
