<?php
define('DB_HOST', 'localhost');
define('DB_LOGIN', 'user');
define('DB_PASSWORD', 'user');
define('DB_NAME', 'pro_demo');
define('DB_PORT', '3306');

class Task1{
    private $dbconn;

    protected $host;
    protected $username;
    protected $password;
    protected $db;
    protected $port;

    public function __construct($host = NULL, $username = NULL, $password = NULL, $db = NULL, $port = NULL) {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->db = $db;
        $this->port = $port;
        $this->connect();
    }
    private function connect(){
        $this->dbconn = new mysqli($this->host, $this->username, $this->password, $this->db, $this->port)
            or die('There was a problem connecting to the database');
        $this->dbconn->set_charset ('utf8');
    }
    public function getMenu(){
        $sql = "SELECT * FROM menu";
        if(!$result = mysqli_query($this->dbconn, $sql))
            return false;
        $items = mysqli_fetch_all($result, MYSQLI_ASSOC);
        mysqli_free_result($result);

        $arrParent = array();
        foreach($items as $item){
            if(empty($arrParent[$item['parent']])){
                $arrParent[$item['parent']] = array();
            }
            $arrParent[$item['parent']][] = $item;
        }
        return $arrParent;
    }
    public function showMenu($arr, $parent=0){
        if(empty($arr[$parent])){
            return;
        }
        if($parent == 0)
            echo '<ul id="accordion">';
        else
            echo '<ul>';
        for($i=0; $i<count($arr[$parent]); $i++){
            echo '<li><a href="#">'. $arr[$parent][$i]['name'] . '</a>';
            $this->showMenu($arr, $arr[$parent][$i]['id']);
            echo '</li>';
        }
        echo '</ul>';
    }
}