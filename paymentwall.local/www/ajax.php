<?php
include "converter.php";


if(isAjax()){
    if(isset($_POST['number'])){
        $res = array();
        $number = $_POST['number'];
        $converter = new NumberConverter("eng");
        $res["eng"] = $converter->convert($number);
        $converter->setLang("rus");
        $res["rus"] = $converter->convert($number);
        $converter->setLang("ukr");
        $res["ukr"] = $converter->convert($number);

        echo json_encode($res);
    }
}

function isAjax(){
    if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH'])
        && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
        return true;
    }
    return false;
}