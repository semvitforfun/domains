<?php
require_once("registerCtr.php");

$reg = new Register();
if($reg != null){
    $action = $_GET['action'];

    switch($action){
        case getAllUsersNames:
            $reg->getAllUsersNames();
            break;
        case addUser:
            $reg->addUser();
            break;
        case login:
            $reg->checkUser();
            break;
    }
}

