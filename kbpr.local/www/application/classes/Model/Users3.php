<?php defined('SYSPATH') or die('No direct script access.');


class Model_Users3 {

    private $dbconn;


    private static $_instance = null;
    private function __construct() {
    }
    protected function __clone() {

    }
    static public function getInstance() {
        if(is_null(self::$_instance))
        {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    private function connect(){
        try{
            $this->dbconn = Database::instance();
        }catch (Exception $ex){
            throw $ex;
        }
    }
    private function disconect(){
        unset($this->dbconn);
    }


    public function getAllUsers(){
        $data = array();
        try{
            $this->connect();

            // Performing SQL query
//            $query = 'SELECT * FROM users';
//            $result = pg_query($query) or die('Query failed: ' . pg_last_error());
//            while($data[] = pg_fetch_array($result, null, PGSQL_ASSOC));
//            array_pop($data);
//            pg_free_result($result);

            $statement = $this->dbconn->query(Database::SELECT, 'SELECT * FROM users');
            $statement->setFetchMode(PDO::FETCH_ASSOC);
            $data = $statement->fetch();




        }catch (Exception $ex){
            throw $ex;
        }
        $this->disconect();
        return $data;
    }
    public function delUser($id){
        try{
            $this->connect();
            $query = "DELETE FROM users where id='$id'";
            pg_query($query);
        }catch (Exception $ex){
            throw $ex;
        }
        $this->disconect();
    }
    public function addUser($dataArr){
        $data =array();
        try{
            $this->connect();

            $res = pg_query_params($this->dbconn, 'INSERT INTO users
            (name, surname, pcode, email, adress, city, country) VALUES ($1, $2, $3, $4, $5, $6, $7) RETURNING id',
                array($dataArr['name'], $dataArr['surname'], 'pcode', $dataArr['email'],
                      $dataArr['adress'], $dataArr['city'], $dataArr['country']));

            $data = pg_fetch_array($res, null, PGSQL_ASSOC);
            $data['pcode'] = $this->uniqueCode($dataArr, $data['id']);

            pg_query_params($this->dbconn, 'UPDATE users SET pcode=$1 WHERE id=$2', array($data['pcode'], $data['id']));
        }catch (Exception $ex){
            throw $ex;
        }
        $this->disconect();
    }
    public function updateUser($dataArr){
        try{
            $this->connect();

            $params = array($dataArr['name'], $dataArr['surname'], $dataArr['email'],
                            $dataArr['adress'], $dataArr['city'], $dataArr['country'], $dataArr['id']);

            $res = pg_query_params($this->dbconn, 'UPDATE users SET
                    name=$1, surname=$2, email=$3, adress=$4, city=$5, country=$6 WHERE id=$7',
                $params);
        }catch (Exception $ex){
            throw $ex;
        }

        $this->disconect();
    }

    private function uniqueCode($dataArr, $id){

        return hash('md5', $dataArr['name'] + $dataArr['surname'] +
                $dataArr['email'] + $dataArr['adress'] + $dataArr['city'] + $dataArr['country'] + $id);
    }
}