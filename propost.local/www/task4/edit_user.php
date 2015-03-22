<?php
define('DB_HOST', 'localhost');
define('DB_LOGIN', 'user');
define('DB_PASSWORD', 'user');
define('DB_NAME', 'pro_demo');
define('DB_PORT', '3306');



if(isAjax()){
    $conn = new mysqli(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_NAME, DB_PORT)
            or die('There was a problem connecting to the database');
    if(isset($_POST['arr'])){
        $dataArr = json_decode($_POST['arr'], true);
        if($dataArr['name']){
            updateData($conn, $dataArr);
        }
        if($dataArr['get']){
            $data = getUserById($conn, $dataArr['get']);
            echo json_encode($data);
        }
    }
}

function isAjax(){
    if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH'])
            && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
        return true;
	}
	return false;
}
function updateData($conn, $dataArr){
    $query = "UPDATE users SET name=?, email=?, password=?, phone=?, age=? WHERE id=?";
    $p = $conn->prepare($query);
    $p->bind_param("ssssii", $dataArr['name'], $dataArr['email'], $dataArr['password'], $dataArr['phone'], $dataArr['age'], $dataArr['id']);
    $p->execute();
}
function getUserById($conn, $id){
    $sql = "SELECT name, email, password, phone, age FROM users WHERE id ='$id'";
    if(!$result = mysqli_query($conn, $sql))
        return false;
    $items = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $items;
}