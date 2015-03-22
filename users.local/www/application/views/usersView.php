<div id="tableDiv">

</div>

<script type="text/javascript">
    var res ={};

    window.onload = ajax_show_users();


    function compare(a,b) {
        if (parseInt(a.id) < parseInt(b.id)) return -1;
        if (parseInt(a.id) > parseInt(b.id)) return 1;
        return 0;
    }
    function save_data_local(res){
        if(!$.isEmptyObject(res))
            window.res = res.sort(compare);
    }
    function edit_record(obj){
        var inp = obj.id.replace( /^\D+/g, '');

        create_users_table( inp);
    }
    function ajax_send_data(data, url){

        $.ajax({
            type: "POST",
            data: data,
            url: url,
            dataType: "json",
            success: function(res)
            {
                if(!res['error']){
                    save_data_local(res);
                    create_users_table();
                    return;
                }
                if(res['error']== " "){
                    $("#tableDiv").html('<p>Something wrong with database</p>');
                    alert('Something wrong with database');
                } else {
                    alert('Incorect data:\n' + res['error']);
                    save_data_local(res);
                    create_users_table();
                }
            }
        })
    }
    function ajax_update_record(obj){
        var id = obj.id.replace( /^\D+/g, '');
        var dataArr = {};
        dataArr['id'] =  id;

        if(!validate(dataArr, 'name', 'upd')) return;
        if(!validate(dataArr, 'surname', 'upd')) return;
        if(!validate(dataArr, 'email', 'upd')) return;
        if(!validate(dataArr, 'adress', 'upd')) return;
        if(!validate(dataArr, 'city', 'upd')) return;
        if(!validate(dataArr, 'country', 'upd')) return;

        ajax_send_data('arr=' + JSON.stringify(dataArr), "/ajax/updateUser");
    }
    function ajax_del_record(obj){
        var inp = obj.id.replace( /^\D+/g, '');

        ajax_send_data("id=" + inp, "/ajax/deluser");
    }
    function ajax_show_users(){

        ajax_send_data("", "/ajax/getAllUsers");
    }
    function ajax_add_record(){
        var dataArr = {};

        if(!validate(dataArr, 'name', 'new')) return;
        if(!validate(dataArr, 'surname', 'new')) return;
        if(!validate(dataArr, 'email', 'new')) return;
        if(!validate(dataArr, 'adress', 'new')) return;
        if(!validate(dataArr, 'city', 'new')) return;
        if(!validate(dataArr, 'country', 'new')) return;

        ajax_send_data("arr=" + JSON.stringify(dataArr), "/ajax/addUser");
    }
    function create_users_table( updatedRec){
        updatedRec = typeof updatedRec !== 'undefined' ? updatedRec : -1;
        data = window.res;
        var html = '<table id="usersTable" class="table table-striped table-condensed"><thead><tr>' +
            '<th>Номер</th>' +
            '<th>Имя</th>' +
            '<th>Фамилия</th>' +
            '<th>Уникальный идентификатор</th>' +
            '<th>Почта</th>' +
            '<th>Адрес</th>' +
            '<th>Город</th>' +
            '<th>Страна</th>' +
            '<th></th></th></thead><tbody>';

        i = 0;
        while (data[i]) {
            if(updatedRec == data[i]['id']){
                html += '<tr>';
                html += '<td>' + (i+1) + '</td>';
                html += '<td><input id="upd_user_name" type="text" class="form-control" value="' + data[i]['name'] + '"></td>';
                html += '<td><input id="upd_user_surname" type="text" class="form-control" value="' + data[i]['surname'] + '"></td>';
                html += '<td>' + data[i]['pcode'] + '</td>';
                html += '<td><input id="upd_user_email" type="text" class="form-control" value="' + data[i]['email'] + '"></td>';
                html += '<td><input id="upd_user_adress" type="text" class="form-control" value="' + data[i]['adress'] + '"></td>';
                html += '<td><input id="upd_user_city" type="text" class="form-control" value="' + data[i]['city'] + '"></td>';
                html += '<td><input id="upd_user_country" type="text" class="form-control" value="' + data[i]['country'] + '"></td>';
                html += '<td><button type="button" id="save_' + data[i]['id']+ '" class="btn btn-sm" onClick="ajax_update_record(this)">Сохранить</button> ';
                html += '<button type="button" id="del_' + data[i]['id']+ '" class="btn btn-sm" onClick="ajax_del_record(this)">Удалить</button></td>';
                html += "</tr>";
            }else{
                html += '<tr>';
                html += '<td>' + (i+1) + '</td>';
                html += '<td>' + data[i]['name'] + '</td>';
                html += '<td>' + data[i]['surname'] + '</td>';
                html += '<td>' + data[i]['pcode'] + '</td>';
                html += '<td>' + data[i]['email'] + '</td>';
                html += '<td>' + data[i]['adress'] + '</td>';
                html += '<td>' + data[i]['city'] + '</td>';
                html += '<td>' + data[i]['country'] + '</td>';
                html += '<td><button type="button" id="upd_' + data[i]['id']+ '" class="btn btn-sm" onClick="edit_record(this)">Редактировать</button> ';
                html += '<button type="button" id="del_' + data[i]['id']+ '" class="btn btn-sm" onClick="ajax_del_record(this)">Удалить</button></td>';
                html += "</tr>";
            }
            i++;
        }
        html += '</tbody><tfoot><tr>';
        html += '<td>add new user</td>';
        html += '<td><input id="new_user_name" type="text" class="form-control" placeholder="Enter name"></td>';
        html += '<td><input id="new_user_surname" type="text" class="form-control" placeholder="Enter surname"></td>';
        html += '<td></td>';
        html += '<td><input id="new_user_email" type="text" class="form-control" placeholder="Enter email"></td>';
        html += '<td><input id="new_user_adress" type="text" class="form-control" placeholder="Enter adress"></td>';
        html += '<td><input id="new_user_city" type="text" class="form-control" placeholder="Enter city"></td>';
        html += '<td><input id="new_user_country" type="text" class="form-control" placeholder="Enter country"></td>';
        html += '<td><button type="button" id="addnewuser" class="btn btn-sm" onClick="ajax_add_record()">Добавить</button></td>';

        html += '</tr></tfoot></table>';

        $("#tableDiv").html(html);
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
    function validate(dataArr, field, nu){
        var val = $('#'+ nu +'_user_'+field).val().trim();

        if(val == ""){
            alert( "Please provide " + field + "!" );
            $('#'+ nu +'_user_'+field).focus();
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
