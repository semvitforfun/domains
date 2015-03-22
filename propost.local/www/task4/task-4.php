<?php
$user_id = $_GET['user_id'];

?>
<!DOCTYPE html>
<html>
<head>
    <title>Пользователи</title>
    <meta content="text/html" charset="utf-8">
    <script src="public/jquery-2.1.1.min.js"></script>
</head>
<body>
<h1>Редактировать информацию о пользователе</h1>

<div id="tableDiv">
    <table id="usersTable">
        <thead>
            <th>Имя</th>
            <th>Почта</th>
            <th>Пароль</th>
            <th>Телефон</th>
            <th>Возраст</th>
        </thead>
        <tr>
            <td><input id="name" type="text" value=""></td>
            <td><input id="email" type="text" value=""></td>
            <td><input id="password" type="text" value=""></td>
            <td><input id="phone" type="text" value=""></td>
            <td><input id="age" type="text" value=""></td>
        </tr>
        <tr>
            <td colspan="5" style="text-align:center;">
                <button type="button" id="update_<?=$user_id?>"  onClick="update_record(this)">Обновить</button>
            </td>
        </tr>

</div>

<script type="text/javascript">
    window.onload = get_record();

    function update_record(obj){
        var id = obj.id.replace( /^\D+/g, '');
        var dataArr = {};
        dataArr['id'] =  id;

        if(!validate(dataArr, 'name')) return;
        if(!validate(dataArr, 'email')) return;
        if(!validate(dataArr, 'password')) return;
        if(!validate(dataArr, 'phone')) return;
        if(!validate(dataArr, 'age')) return;

        ajax_send_data('arr=' + JSON.stringify(dataArr), "edit_user.php");
    }
    function get_record(){
        var dataArr = {};
        dataArr['get'] = '<?php echo $user_id; ?>';
        ajax_send_data('arr=' + JSON.stringify(dataArr), "edit_user.php");
    }
    function store_data(res){
        $("#name").val(res['name']);
        $("#email").val(res['email']);
        $("#password").val(res['password']);
        $("#phone").val(res['phone']);
        $("#age").val(res['age']);
    }
    function ajax_send_data(data, url){

        $.ajax({
            type: "POST",
            data: data,
            url: url,
            dataType: "json",
            success: function(res)
            {
                if(res['name']){
                    store_data(res);
                }
            }
            error: function(){

            }
            beforeSend: function(){

            }
            complete: function(){

            }
        })
    }
    function validate_email(emailID){

        atpos = emailID.indexOf("@");
        dotpos = emailID.lastIndexOf(".");
        if (atpos < 1 || ( dotpos - atpos < 2 )){
            alert( "Please provide correct email!" );
            return false;
        }
        return true;
    }
    function validate(dataArr, field){
        var val = $('#'+field).val().trim();

        if(val == ""){
            alert( "Please provide " + field + "!" );
            $('#'+field).focus();
            return false;
        }
        if(field == 'email'){
            if(!validate_email(val))
                return false;
        }

        dataArr[field] = val;
        return true;
    }


</script>


</body>
</html>