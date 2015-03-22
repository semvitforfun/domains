<?php

function rpHash($value) {
    $hash = 5381;
    $value = strtoupper($value);
    for($i = 0; $i < strlen($value); $i++) {
        $hash = (($hash << 5) + $hash) + ord(substr($value, $i));
    }
    return $hash;
}

if(($_SERVER['REQUEST_METHOD'] == 'POST') && (isset($_POST['submit']))){
    if(rpHash($_POST['captcha']) == $_POST['captchaHash']){
        echo 'правильно';
    }else {
        echo 'неправильная картика';
    }
}

?>
<div id="login_block">
    <form role="form" id="form-login" method="post">
        <fieldset>
            <div class="form-group">
                <label for="rp_captcha">Картинка</label>
                <input id="rp_captcha" name="captcha" type="text" value="" placeholder="Картинка" class="form-control"/>
            </div>
            <div class="form-group">
                <button type="submit" name="submit" id="go-to-personal" class="btn-default">Войти</button>
            </div>
        </fieldset>
    </form>

</div>

<script src="../js/realperson.js"></script>