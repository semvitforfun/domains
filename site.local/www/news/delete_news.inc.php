<?php
$id = $news->clearInt($_GET['del']);
if($id){
    if(!$news->deleteNews($id)){
        $errMsg = 'Произошла ошибка удаления аписи';
    }else{
        header('Location: news.php');
        exit;
    }
}
?>