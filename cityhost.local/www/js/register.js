window.data = [];


function sdf(){
    ajax_send_data('arr=' + JSON.stringify(getInputData()), 'controller/register.php?action=addUser', true);
}
function getAllUsersNames(){

    ajax_send_data('', 'controller/register.php?action=getAllUsersNames', false);
}
function getInputData(){

    var arr ={};
    arr['name'] = $("#reg_name").val();
    arr['login'] = $("#reg_login").val();
    arr['pwd'] = $("#reg_pwd").val();
    arr['email'] = $("#reg_email").val();
    return arr;
}
function ajax_send_data(data, url, mode){

    $.ajax({
        type: "POST",
        data: data,
        url: url,
        dataType: "json",
        success: function(res)
        {
            data_handle(res);
        },
        async:   mode
    })
}
function generateSuccessMsg(){
    var html = '<p style="color: #008000"> Спасибо за регистрацию. Письмо для проверки достоверности введенных ' +
        'данных было отправленно Вам на электронную почту. Пожалуйста перейдите по ссылке для подтверждения ' +
        'регистрации </>';

    document.getElementById('reg_block').innerHTML = html;
}
function data_handle(res){
    switch (res['content']){
        case 'allUsers':
            window.data = [];
            for(var l in res['data'] ){
                window.data.push(res['data'][l]);
            }
            break;
        case 'addUser':
            if(res['status'] == 'error'){
                alert(res['errorMsg']);
            }
            if (res['status'] == 'ok'){
                generateSuccessMsg();
            }
            break;
    }
}

function validateData() {
    $("#reg_form").validate({
        submitHandler: sdf,
        rules: {
            au_name: {
                required: true
            },
            au_login: {
                required: true,
                rangelength: [5, 20],
                uniquelogin: true
            },
            au_password: {
                required: true
            },
            au_password2: {
                required: true,
                pwdbothcheck: true
            },
            au_email: {
                required: true,
                email: true
            }
        },
        messages: {
            au_name: {
                required: "Введите имя"
            },
            au_login: {
                required: "Введите логин",
                rangelength: "Длина логина должна быть от {0} до {1} знаков"
            },
            au_password: {
                required: "Введите пароль"
            },
            au_password2: {
                required: "Введите пароль",
                pwdbothcheck: "Пароли не совпадают"
            },
            au_email: {
                required: "Введите E-mail",
                email: "Неверный формат E-mail"
            }
        }
    });
}

//entry point
$.validator.addMethod("pwdbothcheck", function(value, element){
        if(this.optional(element) || value != $("#reg_pwd").val()){
            return false;
        }
        return true;
    }, "Пароли не совпадают"
);

$.validator.addMethod("uniquelogin", function(value, element){
        getAllUsersNames();
        for(var i=0; i< window.data.length; i++){
            if(value == window.data[i]){
                return false;
            }
        }
        return true;
    }, "Такой логин уже есть в базе данных"
);

$(document).ready(validateData)