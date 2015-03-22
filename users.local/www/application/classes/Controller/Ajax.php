<?php defined('SYSPATH') or die('No direct script access.');


class Controller_Ajax extends Controller {

	public function action_deluser()
	{
        if(Request::$initial->is_ajax()){

            if (isset($_POST["id"])){
                $id = $_POST["id"];

                $users = Model_Users::getInstance();
                try{
                    $users->delUser($id);
                }catch (Exception $ex){
                    echo json_encode(array('error'=>' '));
                    return;
                }
                try{
                    echo json_encode($users->getAllUsers());
                }catch (Exception $ex){
                    echo json_encode(array('error'=>' '));
                }
            }
        }
	}

    public function action_getAllUsers(){
        try{
            echo json_encode(Model_Users::getInstance()->getAllUsers());
        }catch (Exception $ex){
            echo json_encode(array('error'=>' '));
        }
    }

    public  function action_addUser(){
        if(Request::$initial->is_ajax()){
            if(isset($_POST['arr'])){
                $dataArr = json_decode($_POST['arr'], true);
                $users = Model_Users::getInstance();
                try{
                    $users->addUser($dataArr);
                }catch (Exception $ex){
                    echo json_encode(array('error'=>$ex->getMessage()));
                    return;
                }
            }
            try{
                echo json_encode(Model_Users::getInstance()->getAllUsers());
            }catch (Exception $ex){
                echo json_encode(array('error'=>' '));
            }
        }
    }

    public  function action_updateUser(){
        if(Request::$initial->is_ajax()){
            if(isset($_POST['arr'])){
                $dataArr = json_decode($_POST['arr'], true);
                $users = Model_Users::getInstance();
                try{
                    $users->updateUser($dataArr);
                }catch (Exception $ex){
                    echo json_encode(array('error'=>' '));
                    return;
                }
            }
            try{
                echo json_encode(Model_Users::getInstance()->getAllUsers());
            }catch (Exception $ex){
                echo json_encode(array('error'=>' '));
            }
        }
    }
}
