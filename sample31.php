<?php
function maxVal($arg1, $arg2){
    //関数の定義
    if ($arg1 < $arg2){
        $retVal = $arg2;
    } else {
        $retVal = $arg1;
    }
    return $retVal;
}

echo "大きい数は".maxVal(20, 30)."です。"; //関数の参照使用
?>
