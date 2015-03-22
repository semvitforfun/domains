<?php
class NumberConverter{

    private $convertRusArr = array(
        "error" => "некоректное число или диапазон",
        "1" => array(
            "-" => "минус",
            "0" => "ноль",
            "1" => "один",
            "2" => "два",
            "3" => "три",
            "4" => "четыре",
            "5" => "пять",
            "6" => "шесть",
            "7" => "семь",
            "8" => "восемь",
            "9" => "девять",
            "10" => "десять",
            "11" => "одинадцать",
            "12" => "двенадцать",
            "13" => "тринадцать",
            "14" => "четырнадцать",
            "15" => "пятнадцать",
            "16" => "шестнадцать",
            "17" => "семнадцать",
            "18" => "восемнадцать",
            "19" => "девятнадцать",
        ),
        "2" => array(
            "2" => "двадцать",
            "3" => "тридцать",
            "4" => "сорок",
            "5" => "пятьдесят",
            "6" => "шестьдесят",
            "7" => "семьдесят",
            "8" => "восемьдесят",
            "9" => "девяносто",
        ),
        "3" => array(
            "1" => "сто",
            "2" => "двести",
            "3" => "триста",
            "4" => "четыреста",
            "5" => "пятьсот",
            "6" => "шестьсот",
            "7" => "семьсот",
            "8" => "восемьсот",
            "9" => "девятьсот",
        ),
        "4" => array(
            "0" => "тысяч",
            "1" => array("одна","тысяча"),
            "2" => array("две","тысячи"),
            "3" => "тысячи",
            "4" => "тысячи",
        ),
        "5" => array(
            "0" => "миллионов",
            "1" => "миллион",
            "2" => "миллиона",
            "3" => "миллиона",
            "4" => "миллиона",
        ),
        "6" => array(
            "0" => "миллиардов",
            "1" => "миллиард",
            "2" => "миллиарда",
            "3" => "миллиарда",
            "4" => "миллиарда",
        )
    );

    private $convertUkrArr = array(
        "error" => "некоректне число чи діапазон",
        "1" => array(
            "-" => "мінус",
            "0" => "нуль",
            "1" => "один",
            "2" => "два",
            "3" => "три",
            "4" => "чотири",
            "5" => "п'ять",
            "6" => "шість",
            "7" => "сім",
            "8" => "вісім",
            "9" => "дев'ять",
            "10" => "десять",
            "11" => "одинадцать",
            "12" => "дванадцать",
            "13" => "тринадцать",
            "14" => "чотирнадцать",
            "15" => "пятнадцать",
            "16" => "шістнадцать",
            "17" => "сімнадцать",
            "18" => "вісімнадцать",
            "19" => "дев'ятнадцать",
        ),
        "2" => array(
            "2" => "двадцать",
            "3" => "тридцать",
            "4" => "сорок",
            "5" => "п'ятдесят",
            "6" => "шістдесят",
            "7" => "сімдесят",
            "8" => "вісімдесят",
            "9" => "дев'яносто",
        ),
        "3" => array(
            "1" => "сто",
            "2" => "двісті",
            "3" => "триста",
            "4" => "чотириста",
            "5" => "п'ятсот",
            "6" => "шістсот",
            "7" => "сімсот",
            "8" => "вісімсот",
            "9" => "дев'ятсот",
        ),
        "4" => array(
            "0" => "тисяч",
            "1" => array("одна","тисяча"),
            "2" => array("дві","тисячі"),
            "3" => "тисячі",
            "4" => "тисячі",
        ),
        "5" => array(
            "0" => "мілліонів",
            "1" => "мілліон",
            "2" => "мілліона",
            "3" => "мілліона",
            "4" => "мілліона",
        ),
        "6" => array(
            "0" => "мілліардів",
            "1" => "мілліард",
            "2" => "мілліарди",
            "3" => "мілліарди",
            "4" => "мілліарди",
        )
    );

    private $convertEngArr = array(
        "error" => "bad number or range",
        "1" => array(
            "-" => "minus",
            "0" => "zero",
            "1" => "one",
            "2" => "two",
            "3" => "tree",
            "4" => "four",
            "5" => "five",
            "6" => "six",
            "7" => "seven",
            "8" => "eight",
            "9" => "nine",
            "10" => "ten",
            "11" => "eleven",
            "12" => "twelve",
            "13" => "thirteen",
            "14" => "fourteen",
            "15" => "fifteen",
            "16" => "sixteen",
            "17" => "seventeen",
            "18" => "eighteen",
            "19" => "nineteen",
        ),
        "2" => array(
            "2" => "twenty",
            "3" => "thirty",
            "4" => "forty",
            "5" => "fifty",
            "6" => "sixty",
            "7" => "seventy",
            "8" => "eighty",
            "9" => "ninety",
        ),
        "3" => array(
            "1" => "one hundred",
            "2" => "two hundred",
            "3" => "tree hundred",
            "4" => "four hundred",
            "5" => "five hundred",
            "6" => "six hundred",
            "7" => "seven hundred",
            "8" => "eight hundred",
            "9" => "nine hundred",
        ),
        "4" => "thousand",
        "5" => "million",
        "6" => "billion"
    );

    private $convertArr;
    private $lang;

    public function  __construct($lang="rus"){
        $this->setLang($lang);
    }
    public function setLang($lang){
        $this->lang = $lang;
        unset($this->convertArr);
        switch($lang){
            case "rus":
                $this->convertArr = $this->convertRusArr;
                break;
            case "ukr":
                $this->convertArr = $this->convertUkrArr;
                break;
            case "eng":
                $this->convertArr = $this->convertEngArr;
                break;
        }
    }
    public function convert($number){
        $number = trim($number);
        $minus ='';
        if($number[0] == '-')
            $minus = $this->convertArr["1"]["-"]." ";
        if(!$this->checkNum($number))
            return $this->convertArr["error"];

        $parts = explode(',', number_format($number));

        $res = '';
        switch(count($parts)){
            case 1:
                $res = $this->convertUpTo3Digit($parts[0], true);
                break;
            case 2:
                $res = $this->thousandsConvert($parts[0]) .' '. $this->convertUpTo3Digit($parts[1]);
                break;
            case 3:
                $res = $this->millionsBillionsConvert($parts[0], "5") .' '. $this->thousandsConvert($parts[1]) .' '
                    . $this->convertUpTo3Digit($parts[2]);
                break;
            case 4:
                $res = $this->millionsBillionsConvert($parts[0], "6") .' '.$this->millionsBillionsConvert($parts[1], "5") .' '
                    . $this->thousandsConvert($parts[2]) .' '. $this->convertUpTo3Digit($parts[3]);
                break;
        }
        return $minus . $res;
    }
    private function  millionsBillionsConvert($number, $mb){
        if($number == 0){
            return;
        }
        $str = $this->convertUpTo3Digit($number);
        if($this->lang == "eng"){
            return $str .' '. $this->convertArr[$mb];
        }else{
            $len = strlen($number);
            $last = $number[$len-1];
            switch($last){
                case '1':
                case '2':
                case '3':
                case '4':
                    return $str .' '. $this->convertArr[$mb][$last];
                default:
                    return $str .' '. $this->convertArr[$mb]["0"];
            }
        }
    }
    private function thousandsConvert($number){
        if($number == 0){
            return;
        }
        $str = $this->convertUpTo3Digit($number);
        if($this->lang == "eng"){
            return $str .' '. $this->convertArr["4"];
        }else{
            $len = strlen($number);
            $last = $number[$len-1];
            switch($last){
                case '1':
                case '2':
                    $str = str_replace($this->convertArr["1"][$last], $this->convertArr["4"][$last][0], $str);
                    return $str .' '. $this->convertArr["4"][$last][1];
                case '3':
                case '4':
                    return $str .' '. $this->convertArr["4"][$last];
                default:
                    return $str .' '. $this->convertArr["4"]["0"];
            }
        }
    }
    private function convertUpTo3Digit($number, $zeroShow = false){
        if($number == 0 and !$zeroShow){
            return;
        }
        if($number < 100 ){
            return $this->convert2Digit($number);
        }
        if($number < 1000){
            return $this->convertArr["3"][$number[0]] . ' ' . $this->convert2Digit($number[1].$number[2]);
        }
    }
    private function convert2Digit($number){
        if($number < 20){
            return $this->convertArr["1"][$number];
        }
        $delimiter = " ";
        if($this->lang == "eng")
            $delimiter = "-";
        if($number < 100){
            $str = '';
            if($number[1] != 0){
                $str = $this->convertArr["1"][$number[1]];
            }
            return $this->convertArr["2"][$number[0]] . $delimiter . $str;
        }
    }
    private function checkNum(&$number){
        $number = str_replace(" ", "", $number);
        if(!is_numeric($number))
            return false;
        $d = abs((double)$number);
        if($d >= 1000000000000)
            return false;
        $number = (string)$d;
        return true;
    }
}
?>