var arr ={};

function getValues(){
    arr['login'] = $("#log_login").val();
    arr['pwd'] = $("#log_pwd").val();
    return arr;
}
function ajax_send_data(data, url){

    $.ajax({
        type: "POST",
        data: data,
        url: url,
        dataType: "json",
        success: function(res)
        {
            data_handle(res);
        }
    })
}
function sdf(){
       //$("#form-login").submit();
    ajax_send_data('arr=' + JSON.stringify(getValues()), 'controller/register.php?action=login');
}
function data_handle(res){
    switch (res['content']){
        case 'login':
            if(res['status']=='ok'){
                var referrer = getParameterByName('referrer');
                if(referrer != ''){
                    referrer = '/index.php?id='+referrer;
                }else{
                    referrer = '/index.php';
                }
                window.location.replace(referrer);
                //document.getElementById('login_block').innerHTML = res['data'];
            }
            if(res['status'] == 'bad'){
                document.getElementById('bad_msg').innerHTML = "<p style='color: red'>Неправильный логин или пароль</p>";
                return;
            }
            if(res['status']=='error'){
                alert(res['errorMsg']);
            }
    }
}

function validateData() {
    $("#form-login").validate({
        submitHandler: sdf,
        rules: {
            login: {
                required: true
            },
            pwd: {
                required: true

            }
        },
        messages: {
            login: {
                required: "Введите логин"
            },
            pwd: {
                required: "Введите пароль"

            }
        }
    });
}

function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

$(document).ready(function(){
    validateData();
    $("#log_captcha").realperson();
});

