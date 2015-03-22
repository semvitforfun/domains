<?php defined('SYSPATH') or die('No direct script access.');


class Model_Users {

    private $dbconn;

    private static $_instance = null;
    private function __construct() {
    }
    protected function __clone() {

    }

    public static function exception_error_handler($errno, $errstr, $errfile, $errline ) {
        throw new ErrorException($errstr, $errno, 0, $errfile, $errline);
    }

    static public function getInstance() {
        if(is_null(self::$_instance))
        {
            self::$_instance = new self();
            set_exception_handler(array('Model_Users', 'exception_error_handler'));
        }
        return self::$_instance;
    }

    private function connect(){
        try{
            $this->dbconn = pg_connect("host=localhost port=5432 dbname=usersdb user=postgres password=postgres");
        }catch (Exception $ex){
            throw $ex;
        }
    }
    private function disconect(){
        pg_close( $this->dbconn);
    }
    public function getAllUsers(){
        $data = array();
        try{
            $this->connect();

            // Performing SQL query
            $query = 'SELECT * FROM users';
            $result = pg_query($query) or die('Query failed: ' . pg_last_error());
            while($data[] = pg_fetch_array($result, null, PGSQL_ASSOC));
            array_pop($data);
            pg_free_result($result);
        }catch (Exception $ex){
            throw $ex;
        }
        $this->disconect();
        return $data;
    }
    public function delUser($id){
        try{
            $this->connect();
            pg_query_params($this->dbconn, 'DELETE FROM users where id=$1', array($id));
        }catch (Exception $ex){
            throw $ex;
        }
        $this->disconect();
    }
    public function addUser($dataArr){
        $data =array();
        try{
            $this->connect();

            //check input data
            $dataArr = $this->checkInputData($dataArr);
            foreach($dataArr as $key=>$value){
                if(!$value){
                    throw new Exception("Please check '" . $key . "' field");
                }
            }

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
    private function checkInputData($dataArr){
        $dataArr['email'] = filter_var($dataArr['email'], FILTER_VALIDATE_EMAIL);
        $dataArr['name'] = $this->checkStringValue((string)$dataArr['name']);
        $dataArr['surname'] = $this->checkStringValue((string)$dataArr['surname']);
        $dataArr['email'] = $this->checkStringValue((string)$dataArr['email']);

        return $dataArr;
    }
    private function checkStringValue($str){
        if(!trim($str))
            return false;
        return $str;
    }
}