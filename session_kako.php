<?php
// Your code here!
    session_start();
    if(!isset($_SESSION['kaisu'])){
?>
ようこそ！1回目の訪問です。
<?php 
        $_SESSION['kaisu'] = 1;
        $_SESSION['kako'][1] = date("Y/m/d H:i:s");
    } else {
        $_SESSION['kaisu']++;
        $c = $_SESSION['kaisu'];
        $_SESSION['kako'][$c] = date("Y/m/d H:i:s");
        for($i = 1; $i <= $c; $i++){
?>
<?= $i ?>回目は<?= $_SESSION['kako'][$i] ?>に訪問されました！<br />
<?php
        }
        
    }
?>

