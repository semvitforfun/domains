<?php
?>

<div id="reg_block">
    <form role="form" id="reg_form" method="post">
        <fieldset>
            <div class="form-group">
                <label for="reg_name" id="name_label">Имя</label>
                <input id="reg_name" name="au_name" type="text" value="" placeholder="Имя" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="reg_login" id="login_label">Логин</label>
                <input id="reg_login" name="au_login" type="text" value="" placeholder="Логин" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="reg_pwd">Пароль</label>
                <input id="reg_pwd" name="au_password" type="password" value="" placeholder="Пароль" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="reg_pwd2">Повтоите пароль</label>
                <input id="reg_pwd2" name="au_password2" type="password" value="" placeholder="Повторите пароль" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="reg_email">Электронная почта</label>
                <input id="reg_email" name="au_email" type="email" value="" placeholder="Электронная почта" class="form-control"/>
            </div>
            <div id="personal-buttons">
                <button type="submit" id="go-to-personal" class="btn-default">Зарегистрироваться</button>
            </div>

            <div id="debug">

            </div>
        </fieldset>
    </form>
</div>

<script src="../js/register.js"></script>