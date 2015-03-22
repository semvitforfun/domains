<?php

?>

<div id="login_block">
    <form role="form" id="form-login">
        <fieldset>
            <div class="form-group">
                <label for="log_login" id="login_label">Логин</label>
                <input id="log_login" name="login" type="text" value="" placeholder="Логин" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="log_pwd">Пароль</label>
                <input id="log_pwd" name="pwd" type="password" value="" placeholder="Пароль" class="form-control"/>
            </div>

            <div>
                <label id="bad_msg"></label>
            </div>
            <div class="form-group">
                    <button type="submit" id="go-to-personal" class="btn-default">Войти</button>
            </div>
        </fieldset>
    </form>

</div>


<script src="../js/login.js"></script>