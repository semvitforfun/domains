<?php
require_once("../controller/sysDef.php");

class Users{
    protected static $_instance;
    protected $_dbh;

    private function __construct(){

    }
    public function disconnect(){
        $this->_dbh = null;
    }
    public function connect(){
        try{
            $this->_dbh = new PDO("mysql:host=".DB_HOST."; dbname=".DB_NAME."; port=".DB_PORT, DB_USER, DB_PASS);
        }catch (PDOException $e){
            throw $e;
        }
    }
    public static function getInstance()
    {
        if(is_null(self::$_instance)){
            self::$_instance = new self();
        }
        return self::$_instance;
    }
    public function  getAllUsersLogins(){
        try{
            $res = array();
            $this->connect();
            $sql = "SELECT login FROM users";
            $stmt = $this->_dbh->prepare($sql);
            $stmt->execute();
            $temp = $stmt->fetchAll(PDO::FETCH_NUM);
            $this->disconnect();
            foreach($temp as $value){
                array_push ($res, $value[0]);
            }
            return $res;
        }catch (PDOException $ex){
            throw $ex;
        }
    }
    public function addUser($data){
        try{
            $this->connect();
            $stmt = $this->_dbh->prepare("INSERT INTO users (name, login, pwd, email) VALUES (?,?,?,?)");
            $st = $stmt->execute(array($data['name'], $data['login'], $data['pwd'], $data['email']));
            $this->disconnect();
            return $st;
        }catch (Exception $ex){
            throw $ex;
        }
    }
    public function checkUser($data){
        try{
            $this->connect();
            $stmt = $this->_dbh->prepare("SELECT pwd FROM users WHERE login= :login");
            $stmt->execute(array(':login' => $data['login']));
            $temp = $stmt->fetch(PDO::FETCH_ASSOC);
            $this->disconnect();
            if ($temp['pwd'] == $data['pwd']){
                return true;
            }
            return false;
        }catch (Exception $ex){
            throw $ex;
        }
    }
}