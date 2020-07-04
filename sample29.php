<?php
    print("今日→" .date("Y/m/d")."<br>");
    print("昨日→" .date("Y/m/d",  strtotime("-1 day"))."<br>");
    print("明日→".date("Y/m/d",  strtotime("+1 day"))."<br>");
    print("１ヶ月後→" .date("Y/m/d",  strtotime("+1 month"))."<br>");
    print("２ヶ月後→" .date("Y/m/d", strtotime("+2 month"))."<br>");
    //現在時刻に対する時刻を表示
    print("現在時刻→" .date("h:i: s")."<br>");
    print("８時間１５分後→" .date("h:i:s", strtotime("+8 hour 15 minute")));
?>
