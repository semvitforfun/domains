<?php
$str = "html.option1.a1=23
html.option1.a2=2f
html.option1.a3=2345
html.option2.a1=2
html.option2.a4=2
html.option2.a7=2
RegExp.simple.q1=234
RegExp.simple.q2=34
RegExp.simple=23sd
RegExp=1345";

function strParse($str){
    $res =array();
    foreach(explode("\n", $str) as $s){
        $t = explode("=", $s);
        optionsParse($t[0], $t[1], $res);
//        var_dump($res);
//        var_dump(explode(".", $t[0], 2));
//        echo "<br>";
    }
}
function optionsParse($str, $value, $arr){
    $r = explode(".", $str, 2);
//    echo $str;
        var_dump($r);
        echo "<br>";
    if(empty($r[1])){
        $arr[$str] = $value;
        return;
    }
    $arr[$r[0]] = array();
    optionsParse($r[1], $value, $arr[$r[0]]);
}

strParse($str);