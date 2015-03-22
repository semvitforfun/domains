<?php defined('SYSPATH') or die('No direct script access.');


class Model_Users2 extends Model {

    private $_tableUsers = 'users';

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

    public function getAllUsers(){

        $sql = "SELECT * FROM ". $this->_tableUsers;

        return DB::query(Database::SELECT, $sql)
            ->execute();
    }
}