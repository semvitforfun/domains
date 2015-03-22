<?php

?>
<!DOCTYPE html>
<head>
    <meta content="text/html" charset="utf-8">
    <title></title>
    <script src="public/jquery-2.1.1.min.js"></script>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<div id="centerLayer">
    <div id='controls'>
        <h3>Введите число в диапазоне от -999 999 999 999 до 999 999 999 999</h3>
        <span style='font-size: 14pt; font-weight: bold;'>Число:</span>
        &nbsp; <input type='text' id='number' value='' size=20 "> &nbsp;
        <button type="button" id='bt' class='myButton' onclick="send_data()">Перевести</button>
    </div>

        <div id="rus" class="output_box">
            <div class="output_label" >Рус:</div>
            <div id="rus_data" class="output"></div>
        </div>
        <div id="ukr" class="output_box">
            <div class="output_label" >Укр:</div>
            <div id="ukr_data" class="output"></div>
        </div>
        <div id="eng" class="output_box">
            <div class="output_label">Eng:</div>
            <div id="eng_data" class="output"></div>
        </div>
</div>

<script type="text/javascript">
    function send_data(){
        var arr ={};
        arr['number'] = $('#number').val();

        ajax_send_data(arr, 'ajax.php');
    }
    function ajax_send_data(data, url){

        $.ajax({
            type: "POST",
            data: data,
            url: url,
            dataType: "json",
            success: function(res)
            {
                print_data(res);
            }
        })
    }
    function print_data(res){
        $("#rus_data").html(res["rus"]);
        $("#ukr_data").html(res["ukr"]);
        $("#eng_data").html(res["eng"]);
    }
</script>

</body>
</html>












