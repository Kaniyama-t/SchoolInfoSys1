<?php
    function getYearSymbol($timestamp){
        if(strtotime("2020/05/01")<=$timestamp)
            return "令和".(date("Y")-2020+1)."年";
        elseif(strtotime("1989/01/08")<=$timestamp)
            return "平成".(date("Y")-1989+1)."年";
        elseif(strtotime("1926/12/25")<=$timestamp)
            return "昭和".(date("Y")-1926+1)."年";
        elseif(strtotime("1912/07/30")<=$timestamp)
            return "大正".(date("Y")-1912+1)."年";
        elseif(strtotime("1868/10/23")<=$timestamp)
            return "明治".(date("Y")-1868+1)."年";
        else
            return "ERROR:不正な値";
    }

    $name="詫間太郎";
    $age=18;
    $birthday=strtotime("2001/04/02");
    $birthyear_symbol=getYearSymbol($birthday);

    print("私の名前は".$name."です。年齢は".$age."才、生年月日は".$birthyear_symbol.date("MM月DD日",$birthday)."です。");
?>