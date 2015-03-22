<?php

require_once("../model/users.php");

class Register {
    protected static $_instance;
    protected $users;

    public function __construct(){
//        if($this->isAjax()){
            $this->users = Users::getInstance();
            self::$_instance = $this;
//        }
//        self::$_instance = null;
//        return null;
    }
//    private function isAjax(){
//        if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH'])
//            && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
//            return true;
//        }
//        return false;
//    }
    public function getAjaxData(){
        return json_decode($_POST['arr'], true);
    }
    public function getAllUsersNames(){
        try{
            $res = array();
            $res['content'] = "allUsers";
            $res['data'] = $this->users->getAllUsersLogins();
            echo json_encode($res);
        }catch (Exception $ex){
            echo json_encode(array('content'=>'allUsers', 'status'=>'error', 'errorMsg'=>$ex->getMessage()));
        }
    }
    public function addUser(){
        $data = $this->getAjaxData();
        try{
            if($this->users->addUser($data)){
                echo json_encode(array('status'=>'ok', 'content' => 'addUser'));
            }else{
                echo json_encode(array('content'=>'addUser', 'status'=>'error', 'errorMsg'=>'Что то не так при попытке записать данные.'));
            }
        }catch (Exception $ex){
            echo json_encode(array('content'=>'addUser', 'status'=>'error', 'errorMsg'=>$ex->getMessage()));
        }
    }
    public function checkUser(){
        $data = $this->getAjaxData();
        try{
            if($this->users->checkUser($data)){
                session_start();
                $_SESSION['login'] = $data['login'];

                echo json_encode(array('status'=>'ok', 'content' => 'login', 'referrer'=>$_SERVER['HTTP_REFERER'] ));
            }else{
                echo json_encode(array('status'=>'bad', 'content' => 'login'));
            }
        }catch (Exception $ex){
            echo json_encode(array('content'=>'login', 'status'=>'error', 'errorMsg'=>$ex->getMessage()));
        }
    }
}